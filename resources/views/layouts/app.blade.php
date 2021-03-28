<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    @stack('seo')
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>International Education Council, RPL Assessments, Australia, Bangladesh</title>

    <meta name="author" content="">
<meta name="tags" content="rpl consulting,
rpl consulting group,
repl consulting inc,
rol consulting florida,
rol consulting,
rpp consulting,
rp-l,
what is an rpl,
rpl it,
what is rpl,
rpl,
the rpl,
how to rpl,
rpl business,
rpl company,
rpl information,
rpl data,
police rpl,
news about rpl,
rpl news,
rpl video,
system rpl,
rpl system,
free rpl,
rpl price,
rpl service,
rpl group,
rpl online,
online rpl,
rpl services,
rpl hours,
rpl media,
rpl project,
rpl management,
rpl program,
pm to rpl,
rpl report,
rpl process,
rpl list,
rpl security,
rpl share,
rpl download,
rpl 11,
rpl university,
rpl photo,
rpl law,
rpl international,
rpl marketing,
rpl software,
rpl website,
user rpl,
rpl course,
rpl network,
rpl future,
rpl stock,
rpl file,
what is rpl file,
application for rpl,
rpl application,
rpl training,
rpl app,
rpl plan,
rpl rate,
rpl education,
rpl title,
rpl form,
rpl policy,
rpl uk,
rpl prices,
rpl test,
rpl league,
rpl india,
rpl model,
rpl player,
rpl issue,
buy rpl,
rpl cost,
rpl insurance,
rpl solutions,
skills first rpl,
rpl language,
rpl target,
rpl jobs,
rpl project management,
rpl help,
rpl price list,
rpl share price,
">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{-- Style Sheets --}}
    @include('partials.styles')
</head>
<body class="header-sticky">
    {{-- <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section> --}}

    @auth
        <div class="bg-light" style="display: flex; justify-content:center;">
            <a href="{{route('admin.home')}}"><i class="fa fa-pencil-square"></i> Back to dashboard!</a>
        </div>
    @endauth

    <div class="boxed">
        @include('components.topBar')

        {{-- Header --}}
        @include('components.header')

        {{-- <div class="flat-divider d55px"></div> --}}

        {{-- page Contents --}}
        @yield('content')

        {{-- footer --}}
        @include('components.footer')
        {{-- copyright --}}
        @include('components.copyright')
        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>

    {{-- js scripts --}}
    @include('partials.scripts')
</body>
</html>
