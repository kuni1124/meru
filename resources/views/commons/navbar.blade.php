<header>
    
       
       
        <div class="top-nav" >
            <ul>
                <li><a class="title" href="/">トップページへ</a></li>
            <div class="search_item">
              <div class="search_bar">
                <li> {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
                    {!! Form::text('name' ,'', ['class' => 'form-control', 'placeholder' => '何をお探しですか？'] ) !!}
                    </div>
              <div class="search_button">
                {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}</li>
              </div> 
            </div>   
            </ul>
         </div>
        <div class="top-login" >
                 <ul>    
                    
                @if (Auth::check())
                    {{-- ユーザ一覧ページへのリンク --}}
                    
                    
                     <div class="login-nav"> 
                        <ul>       
                            <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>              
                            <li>{!! link_to_route('users.index', '♡いいね！一覧') !!}</li>
                            <li>{!! link_to_route('home.index','マイページ') !!}</li>
                        </ul>
                    </div> 
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                   <div class="singup_box">
                    <li class="nav-item">{!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'btn btn-danger']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item2">{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-primary']) !!}</li>
                   </div>
                @endif
            </ul>
        </div>
       
        </div>    
   
</div>       
        
   
</header>
<style>

header{
    background-color:white;
    padding-left:13%;
    
    
}
.top-nav{
    display:flex;
    width:150%;
}
.top-nav a{
    width:150%;
}
.top-nav li{
    margin-top:3%;
    margin-left:4%;
    width:150%;
}
.top-nav ul{
    list-style:none;
    display:flex;
    
    
    
}
.search_bar{
    width:350px;
    
}
.search_item{
    display:flex;
    width:500px;
    margin-top:1.5%;
}
.search_button{
    width:40%;
    height:75%;
    margin-top:2%;
    margin-left:9%;
    
}
.title{
    color:black;
    font-size:150%;
    
    
}

.navbar-brand{
    color:black;
}

.top-login ul{
    list-style:none;
    display:flex;
    
}
.top-login li{
    font-size:110%;
    
}
.nav-item{
    margin-left:6%;
}
.category{
    margin-left:5%;
}
.brand{
    margin-left:5%;
   
}
.sc-GMQeP{
    width:300%
    
}
.login-nav ul{
    margin-left:100%;
    width:150%;
   
    
}
.login-nav li{
    margin-left:5%;
   
   
    
}
.login-nav a{
    color:black;
}


.btn{
    width:100%;
    height:80%;
    font-size:80%;
    padding-bottom:10%;
    margin-left:100%;
    
}
.modal-wrapper {
  z-index: 999;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 40px 10px;
  text-align: center
}

.modal-wrapper:not(:target) {
  opacity: 0;
  visibility: hidden;
  transition: opacity .3s, visibility .3s;
}

.modal-wrapper:target {
  opacity: 1;
  visibility: visible;
  transition: opacity .4s, visibility .4s;
}

.modal-wrapper::after {
  display: inline-block;
  height: 100%;
  margin-left: -.05em;
  vertical-align: middle;
  content: ""
}

.modal-wrapper .modal-window {
  box-sizing: border-box;
  display: inline-block;
  z-index: 20;
  position: relative;
  width: 70%;
  max-width: 600px;
  padding: 30px 30px 15px;
  border-radius: 2px;
  background: #fff;
  box-shadow: 0 0 30px rgba(0, 0, 0, .6);
  vertical-align: middle
}

.modal-wrapper .modal-window .modal-content {
  max-height: 80vh;
  overflow-y: auto;
  text-align: left
}

.modal-overlay {
  z-index: 10;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0, 0, 0, .8)
}

.modal-wrapper .modal-close {
  z-index: 20;
  position: absolute;
  top: 0;
  right: 0;
  width: 35px;
  color: #95979c !important;
  font-size: 20px;
  font-weight: 700;
  line-height: 35px;
  text-align: center;
  text-decoration: none;
  text-indent: 0
}

.modal-wrapper .modal-close:hover {
  color: #2b2e38 !important
}

.singup_box{
    margin-left:30%;
    display:flex;
    width:120%;
}
.nav-item1{
    
    
}
.nav-item2{
    margin-left:10%;
    
}
</style>
