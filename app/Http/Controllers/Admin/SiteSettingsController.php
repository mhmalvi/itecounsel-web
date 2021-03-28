<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use Database\Seeders\SiteSettingTableSeeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;

class SiteSettingsController extends Controller
{
    public function siteSettings()
    {
        $getsiteSetting = SiteSetting::first();
        if ($getsiteSetting == "") {
            $siteSetting = new SiteSettingTableSeeder();
            $siteSetting->run();
        }
        return view('admin.settings.sitesettings', compact('getsiteSetting'));
    }

    // Store newly created sites info
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required'
        ]);

        try {
            //image > start
            $favicon = '';
            $data = SiteSetting::find($id);

            if ($request->hasFile('favicon')) :

                if (!empty($data) && $data->dbfavicon != "") {
                    if (File::exists('assets/icon/' . $data->dbfavicon)) {
                        File::delete('assets/icon/' . $data->dbfavicon);
                    }
                }

                $image = $request->file('favicon');
                $favicon = 'favicon_' . time() . '.' . $image->extension();

                $img = image::make($image->getRealPath());
                $img->resize(80, 80, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img->stream(); // <-- Key point
                $dir = public_path('storage/app/public/image/favicon/');
                if (!file_exists($dir) && !is_dir($dir)) :
                    mkdir($dir, 0777, true);
                endif;

                Storage::disk('public')->put('image/favicon/' . $favicon, $img);
            endif;

            // image << end
            // image2 >> insert update

            $logo = '';
            if ($request->hasFile('logo')) :

                if (!empty($data) && $data->dblogo != "") {
                    if (File::exists('assets/icon/' . $data->dblogo)) {
                        File::delete('assets/icon/' . $data->dblogo);
                    }
                }

                $image1 = $request->file('logo');
                $logo = 'logo_' . time() . '.' . $image1->extension();

                $img1 = image::make($image1->getRealPath());
                $img1->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img1->stream(); // <-- Key point
                $dir1 = public_path('storage/app/public/image/logo/');
                if (!file_exists($dir1) && !is_dir($dir1)) :
                    mkdir($dir1, 0777, true);
                endif;

                Storage::disk('public')->put('image/logo/' . $logo, $img1);
            endif;
            // image2 >> end

            $arr = [
                'dbsiteName' => $request->siteName,
                'dbemail' => $request->email,
                'dbcontact' => $request->contact,
                'dbaddress' => $request->address,
            ];

            if ($request->favicon != "") {
                $arr['dbfavicon'] = $favicon;
            }

            if ($request->logo != "") {
                $arr['dblogo'] = $logo;
            }

            $data = SiteSetting::find($id);
            $update = $data->update($arr);
            if ($update) {
                $request->session()->flash('message1', ['status' => 1, 'text' => 'Site Setting Updated']);
            } else {
                $request->session()->flash('message1', ['status' => 0, 'text' => 'Site Setting Failed to Update']);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return redirect()->back();




        // dd($req->all());

        /* $properties = ['siteName', 'email', 'contact', 'address'];

        for($i = 0; $i < count($req->site); $i ++){
            SiteSetting::create([
                'property' => $properties[$i],
                'value' => $req->site[$i]
            ]);
        } */
    }
}
