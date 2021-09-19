<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; color: #3d4852; font-size: 18px; font-weight: bold; margin-top: 0; text-align: left;">
                    Hai Pelanggan Setia Cikini Sport! Bagaimana Kabarmu? </br>
                </h1>
                <p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">
                Semoga sehat selalu ya, juga dengan kantongmu, biar bisa melakukan pembayaran atas pesananmu nih! </br>
                    Detailnya di bawah ya. Semoga hari-harimu selalu menyenangkan! </br></br>
                </p>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
                   <p style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">
                    Tagihanmu : {!! $content !!} </br>
                    Yuk Transfer ke : Rekening BRI 123123 atas nama Cikini Sports </br> </br>
                    Jangan lupa konfirmasi pembayaranmu pada Website Cikini Sport ya! </br>
                    Terima kasih!
                   </p>
               </div>
           </div>
       </div>
   </div>
</div>