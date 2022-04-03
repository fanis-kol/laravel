<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <form action="login" method="post">
                    @csrf
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <button type="submit">Login</button>
                </form> 
            </div>
        </div>
    </div>
</div>