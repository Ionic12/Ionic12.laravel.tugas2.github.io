@extends('about')
@section('area')
    <div class="fpage">
        <div class="content">
            <h4>Hello, My Name Is</h4>
            <h1> {{ $nickname }} <span> {{ $longname }} </span></h1>
            <h3>I'am a {{ $job }}</h3>
            <div class="contact">
                <form method="post" action="mailto:bagusiqshan81@gmail.com">
                    <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                    <input type="submit" name="submit" value="contact me">
                </form>
            </div>
        </div>
    </div>
    <section class="desc">
        <div class="slider">
            <div class="rectangle">
                <div class="main">
                    <div class="desc-text">
                        <h2><span>About</span> Me</h2>
                        <h5>student at <span>Malang State Polytechnic</span></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo dicta illum repudiandae quia quibusdam quidem sint 
                        fuga mollitia quisquam ratione unde nam nulla adipisci nihil, 
                        voluptatem, doloremque reiciendis rerum nesciunt.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo dicta illum repudiandae quia quibusdam quidem sint 
                        fuga mollitia quisquam ratione unde nam nulla adipisci nihil, 
                        voluptatem, doloremque reiciendis rerum nesciunt.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo dicta illum repudiandae quia quibusdam quidem sint 
                        fuga mollitia quisquam ratione unde nam nulla adipisci nihil, 
                        voluptatem, doloremque reiciendis rerum nesciunt.
                        </p>
                        <button type="button" onclick="window.location.
                        href='https://api.whatsapp.com/send?phone=+6289630303740&text=Halo';">Let's Talk</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="data">
        <div class="title">
            <h2>My <span>Biodata</span></h2>
        </div>
        <table class="table table-dark table-responsive-sm table-hover">
            <tbody>
              <tr>
                <td>Name</td>
                <td>{{ $nama }}</td>
              </tr>
              <tr>
                <td>Date Of Born</td>
                <td>{{ $ttl }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>{{ $alamat }}</td>
              </tr>
              <tr>
                <td>Nation</td>
                <td>{{ $negara }}</td>
              </tr>
              <tr>
                <td>Religion</td>
                <td>{{ $agama }}</td>
              </tr>
              <tr>
                <td>Phone</td>
                <td>{{ $telp }}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>{{ $email }}</td>
              </tr>
            </tbody>
        </table>
        <button type="button" class="button">Social Media</button>
        <div class="icon">
			<ul>
				<li><a href="https://www.instagram.com/"><img src="img/instagram.png" class="social"></a></li>
				<li><a href="https://www.facebook.com/"><img src="img/facebook.png" class="social"></a></li>
				<li><a href="https://www.twitter.com/"><img src="img/twitter.png" class="social"></a></li>
                <li><a href="https://www.github.com/"><img src="img/github.png" class="social"></a></li>
				<li><a href="https://www.youtube.com/"><img src="img/youtube.png" class="social"></a></li>
			</ul>
		</div>
    </section>
@endsection