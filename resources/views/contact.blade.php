 @include('layouts.header')
<section id="contactForm">

    <h2><?php echo $title;?></h2>

    <div id="cform">
        @if($errors->any())
            <h4>Errors:</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="content">
            <form action= "{{ url('mail') }}" method="post">
            {{ csrf_field() }} 
                <label>Name:</label>
                <input id="" type="text" name="name" value="{{ old('name') }}"><br><br>

                <label>Email:</label>
                <input id="" type="email" name="email" value="{{ old('email') }}"><br><br>

                <label>Subject:</label>
                <input id="" type="text" name="subject" value="{{ old('subject') }}"><br><br>

                <label>Message:</label>
                <textarea id="msg" name="message" value="{{ old('msg') }}"></textarea><br><br>

                <input id="submit" type="submit">
            </form>
        </div>
    </div>
</section>

 @include('layouts.footer')



