<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact page</title>

    <!-- boostrap is css -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <!-- css -->
    <link rel="stylesheet" href="Contact.css" />

    <!-- boostrap -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <!-- Adobe font -->

      <!-- 源ノ角ゴッシク -->
      <script>
          (function(d) {
            var config = {
              kitId: 'ewi4dkf',
              scriptTimeout: 3000,
              async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>

        <!-- Prpxima -->
        　<script>
            (function(d) {
            var config = {
            kitId: 'tok0epx',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script>

  </head>

  <body>

    <!-- Nav Bar -->
    <section id = "nav">
     <div class = "fixed-top">        
      <nav class = "navbar navbar-expand-lg navbar-dark">

        <div class= "container nav-ct">
                 <a class = "navbar-brand" href="index.html">
                   <img src = "images/フルロゴ_white.png" width = "100" height = "25" class = "logo"/>
                 </a>        
                       <button class = "navbar-toggler collapsed" type = "button" data-toggle = "collapse"
                         data-target = "#navbar" aria-controls = "navbarSupportedContent"
                         aria-expanded = "false" aria-label = "Toggle navigation">
                         <span class = "navbar-toggler-icon"></span>
                       </button>
                       
                       <div class="collapse navbar-collapse" id="navbar">
                       <ul class = "navbar-nav">
 
                           <li class = "nav-item">
                             <a class = "nav-link" href = "index.html">Home</a>
                           </li>

                           <li class = "nav-item">
                             <a class = "nav-link" href = "About.html">About</a>
                           </li>

                           <li class = "nav-item">
                             <a class = "nav-link" href="Company.html">Company</a>
                           </li>

                           <li class = "nav-item">
                             <a class = "nav-link" href="Contact.html">Contact</a>
                           </li>                          

                       </ul>
                     </div>

               
           </div>
         </div>

       </nav>
     </div>
    </section> 

      <!-- header -->

      <section id = "header">

        <div class = "container">
          <div class = "row">

            <div class= "col-3">
            </div>

            <div class = "Contact-LISE col-6">
              <h1><b>Contact LISE</b></h1>
              <p>株式会社LISEではあなたの意見、ご質問をいつでも受け付けております。<br>お気軽にご連絡ください。</p>
              <div class = "under-line">
              </div>  
            </div>

            <div class= "col-3">
            </div>   

          </div>
        </div>  

      </section> 


      <!-- main1 -->

      <section id = "main1">

        <div class = "container">
          <div class = "row">

            <div class = "explanation col-6">

             <div class = "main1-text"> 
               <p>フォームよりご連絡頂いた際には、入力して頂いたメールアドレスに返信を送らせていただきます。またお電話でのコンタクトをご希望の方や直接メールを送信されたい方は下記よりご連絡ください。</p>
             </div> 
               

             
               <div class = "container">
                  <div class = "mail row">

                   <div class = "col-4"> 
                     <img src = "images-Contact/mail.png">
                   </div>
                   <div class = "mail-position col-4"> 
                     <p><a href="mailto:example@mail.com">example@mail.com</a></p>
                   </div>
                   <div class = "col-4">
                   </div>

                  </div>               
               </div>


               <div class = "container">
                  <div class = "tel row">

                   <div class = "col-4"> 
                    <img src = "images-Contact/phone-call.png">
                   </div>
                   <div class = "tel-position col-4"> 
                    <p><a href="tel:06-6325-9090">06-6325-9090</a></p>
                   </div>
                   <div class = "col-4">
                   </div>

                  </div>               
               </div>  


               <div class = "container">
                  <div class = "Street-address row">

                   <div class = "col-2"> 
                    <img src = "images-Contact/maps-and-flags.png">
                   </div>
                   <div class = "StreetAddress-position col-9"> 
                      <p><a href = "https://www.google.com/maps/place/%E3%80%92530-0047+%E5%A4%A7%E9%98%AA%E5%BA%9C%E5%A4%A7%E9%98%AA%E5%B8%82%E5%8C%97%E5%8C%BA%E8%A5%BF%E5%A4%A9%E6%BA%80%EF%BC%96%E4%B8%81%E7%9B%AE%EF%BC%92%E2%88%92%EF%BC%91%EF%BC%94+%E3%83%9E%E3%83%83%E3%82%BB%E6%A2%85%E7%94%B0%E3%83%93%E3%83%AB%E2%85%A1/@34.6986758,135.5053222,18.25z/data=!4m5!3m4!1s0x6000e6e9e60c637d:0xbc33a827b061d7cc!8m2!3d34.6987558!4d135.5057866">
                        大阪府大阪市北区西天満6丁目2-14マッセ梅田ビル</a>
                      </p>
                   </div>
                   <div class = "col-1">
                   </div>

                  </div>               
               </div>
               
               <div class = "google-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.254504668413!2d135.50359791553214!3d34.69876019082927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6e9e60c637d%3A0xbc33a827b061d7cc!2z44CSNTMwLTAwNDcg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy66KW_5aSp5rqA77yW5LiB55uu77yS4oiS77yR77yUIOODnuODg-OCu-aiheeUsOODk-ODq-KFoQ!5e0!3m2!1sja!2sjp!4v1611301381279!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>

            </div>


            <form method="post" action="contact-form-process.php">
              <div class = "form col-6">

                    <div class = "Requirements-form-box"> 
                      <p>どのようなご用件ですか？</p>
                        <select class = "Requirements-select" name="Option" id="Option" required>
                          <option class = "Requirements-placeholder" value　=　"" style = "display:none;">用件は…</option>
                           <div class = "select-item"> 
                             <option value = "営業代行について">営業代行について</option>
                             <option value = "UXデザインについて">UXデザインについて</option>
                             <option value = "電気通信について">電気通信について</option>
                             <option value = "その他">その他</option>
                           </div> 
                        </select>
                    </div>

                    <div class = "mail-form-box">
                        <p>メールアドレス</p>
                         <input type="Email" id="Email" name="Email" class = "mail-form" placeholder="example@mail.com" required>
                    </div>  

                    <div class = "name-form-box">
                      <p>氏名</p>
                      <input type="text" id="Name"  name="Name" class = "name-form" placeholder="鈴木太郎" required>
                    </div>

                    <div class = "message-form-box">
                      <p>メッセージ</p>
                        <textarea id="Message" name="Message" cols="30" rows="10" class = "message-form" required></textarea>
                    </div>  

                    <div class = "send-button">
                      <button type="submit" class="btn btn-primary btn-lg">送信</button>
                    </div>  

              </div>  
            </form>

          </div>  
        </div>
      

      </section>  


      <!-- main2 -->

     <section id = "main2">
       <div class = "row">

          <div class = "main2-left col-6">
              <div class = "row">

                <div class= "col-2">
                </div>

                <div class = "main2-icon col-8">
                  
                  <div class = "row">

                    <div class= "Instagram col-4">
                     <img src = "images-Contact/iconmonstr-instagram-11.png">  
                    </div>

                    <div class= "Youtube col-4">
                     <img src = "images-Contact/iconmonstr-youtube-1.png">  
                    </div>

                    <div class= "Facebook col-4">
                     <img src = "images-Contact/iconmonstr-facebook-4.png">  
                    </div>

                  </div>

                </div>  

                <div class= "col-2">
                </div>

              </div>
          </div>
          
          <div class = "main2-right col-6">
            <div class = "row">


             <div class = "col-2">
             </div>  

            <div class = "main2-text col-8">

                <div class = "main2-Best">  
                  <p>最高のアイディアが思いつきましたか？私たちと一緒に実現しましょう。</p>
                </div>

                <div class = "main2-contact">
                  <p>
                   <span style="border-bottom: solid 2px #fff;">
                     <a href = "Contact.html">Contact us</a>
                   </span>
                  </p>
                </div>

            </div>   

             <div class = "col-2">
             </div>  
             

            </div> 
          </div>

        </div>  
      </section>

      
        <!-- footer -->
        <section id = "footer">
            <div class= "container footer-ct">
              <div class = "footer-box">

                    <div class = "row footer-item">
                        <div class ="footer-about col-3">
                          <a href = "index.html" class = "footer-under"><p>Home</p></a>
                        </div>
                        <div class = "footer-company col-3">
                          <a href = "About.html" class = "footer-under"><p>About</p></a>
                        </div>
                        <div class = "footer-UX col-3">
                          <a href = "Company.html" class = "footer-under"><p>Company</p></a>
                        </div>
                        <div class = "footer-contact col-3">
                          <a href = "Contact.html" class = "footer-under"><p>Contact</p></a>
                        </div>
                    </div>

                    <div class = "footerlogo-box">
                      <div class= "row">

                          <div class = "col-4">
                          </div>

                          <div class = "footer-LISE col-4">
                            <a class = "navbar-brand" href="index.html">  
                             <img src = "images/フルロゴ_white.png" width="100" height="25">
                            </a> 
                          </div>

                          <div class = "col-4">
                          </div>

                      </div>
                    </div> 

                    <div class = "copyright-box">
                      <div class= "row">

                          <div class = "col-4">
                          </div>

                          <div class = "copyright col-4">
                            <p>© 2021 LISE, inc. ALL rights reserved.</p>
                          </div>

                          <div class = "col-4">
                          </div>

                      </div>
                    </div>

              </div>      
           </div>
        </section>
        
  </body>
</html>
