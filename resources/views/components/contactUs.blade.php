<form class="flat-contact-form style2 border-white border-large" method="post" action="{{route('contact_us')}}">
    @csrf
    <div class="field">
        <div class="wrap-type-input">
            <div class="input-wrap name">
                <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required="">
            </div>
            <div class="input-wrap email">
                <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email-contact" required="">
            </div>
            <div class="input-wrap last Subject">
                <input type="text" value="" placeholder="Subject" name="subject" id="subject-3">
            </div>
        </div>
        <div class="textarea-wrap">
            <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required=""></textarea>
        </div>
    </div>
    <div class="submit-wrap">
        <button type="submit">Contact Us</button>
    </div>
</form>
