<header>
    
       
       
        <div class="top-nav" >
            <ul>
            {{-- トップページへのリンク --}}
                <li><a class="title" href="/">トップページへ</a></li>
                <li><input type="search" name="keyword" placeholder="何かお探しですか？" class="sc-GMQeP cuephK" value=""></li>
                
            </ul>
        </div>
        <div class="top-login" >
            <ul>
                    <li class="category">カテゴリーから探す</li>
                    <li class="brand">ブランドから探す</li>
                @if (Auth::check())
                    {{-- ユーザ一覧ページへのリンク --}}
                    
                    
                     <div class="login-nav"> 
                        <ul>                     
                            <li>{!! link_to_route('users.index', '♡いいね！一覧') !!}</li>
                            <li>{!! link_to_route('home.index','マイページ') !!}</li>
                        </ul>
                    </div> 
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                
                    <li class="nav-item">{!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'btn btn-danger']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-primary']) !!}</li>
               
                @endif
            </ul>
        </div>
            
           
        
   
</header>
<style>

header{
    background-color:white;
    padding-left:13%;
}

.top-nav li{
    margin-top:3%;
    margin-left:4%;
    
}
.top-nav ul{
    list-style:none;
    display:flex;
    
    
    
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
    
    width:150%;
    justify-content: space-around;
    
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
</style>
