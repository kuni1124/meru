<header>
    
       
       
        <div class="top-nav" >
            <ul>
            {{-- トップページへのリンク --}}
                <li><a class="title" href="/">umekikunihiko</a></li>
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
                            {{-- ログアウトへのリンク --}}
                            <li>{!! link_to_route('logout.get', '♡いいね！一覧') !!}</li>
                            <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                            <li>{!! link_to_route('home.index','マイページ') !!}</li>
                        </ul>
                    </div> 
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'btn btn-primary']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-primary']) !!}</li>
                @endif
            </ul>
        </div>
            
           
        
   
</header>
<style>
header{
    padding-left:13%;
}
.top-nav li{
    margin-top:3%;
    margin-left:6%;
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

.nav-item{
    margin-left:3%;
}
.category{
    margin-left:5%;
}
.brand{
    margin-left:5%;
   
}
.sc-GMQeP{
    width:200%
}
.login-nav ul{
    margin-left:9%;
    width:120%;
    justify-content: space-around;
    
}
.login-nav a{
    color:black;
}
</style>
