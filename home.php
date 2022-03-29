<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://cdn.iconscout.com/icon/premium/png-64-thumb/profile-3133022-2606796.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
</head>
<style>
* {
    color: #46474b;
    scroll-behavior: smooth;
}

body {
    margin: 0;
    font-family: 'nunito', sans-serif;
}

#navbar {
    position: fixed;
    background: #516BEB;
    width: 100%;
}

#navKanan {
    text-align: center;
    float: right;
    padding: 15px;
    opacity: 100%;
}

.cari {
    width: 240px;
    opacity: 100%;
    box-sizing: border-box;
    border: 2px solid #eceff1;
    border-radius: 20px;
    background-color: #eceff1;
    padding: 5px 30px;
    outline: none;
    transition: .4s;
    background-image: url(https://cdn.iconscout.com/icon/premium/png-64-thumb/search-1816292-1539657.png);
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5px 4px;
}

#button1,
#button2,
#button3,
#button4 {
    display: inline-block;
    width: 110px;
}

a {
    color: #FBFFE2;
    text-decoration: none;
    transition: .2s;
}

#section1 {
    background: #516BEB;
    text-align: center;
    padding: 100px 0;
}

#section1 p {
    font-size: 18pt;
    color: #FBFFE2;
    font-family: 'Poppins', sans-serif;
}

#section1 .title {
    color: #FBFFE2;
    font-size: 12pt;
}

#section2 {
    background: #EEEEEE;
    padding: 60px 50px;
    text-align: center;
}

#section2 h3 {
    font-size: 16pt;
    color: #46474b;
}

#section3 {
    text-align: center;
    padding: 60px 0;
}

#section3 h3 {
    color: #46474b;
    font-size: 16pt;
}

#section3 div {
    background: #FEFBF3;
    transition: .3s;
    margin: 0 60px;
    border: 1pt solid #c7c7c7;
    width: 250px;
    display: inline-block;
}

#section2 p,
#section3 p {
    color: #46474b;
}

#section4 {
    padding: 60px 100px;
}

.hero {
    border-radius: 80px;
}

form {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 30px;
    border-radius: 10px;
    background: #9ecbff;
}

#section4 h3 {
    text-align: center;
    font-size: 16pt;
}

label {
    display: block;
    padding: 10px 5px;
}

select {
    display: inline-block;
    box-sizing: border-box;
    width: 33%;
    padding: 10px;
    background: #f5f6f7;
    border: 2px solid #dfdfdf;
    border-radius: 10px;
    outline: none;
    transition: .2s;
}

#section4 input[type=text],
textarea {
    display: block;
    box-sizing: border-box;
    width: 100%;
    padding: 15px;
    outline: none;
    border-radius: 10px;
    border: 2px solid #dfdfdf;
    background: #f5f6f7;
    transition: .2s;
}

textarea {
    height: 200px;
}

footer center {
    color: #FBFFE2;
    background: #838383;
    padding: 45px 0;
    font-size: 14pt;
}

.cari:focus {
    transition: .3s;
    padding-left: 10px;
    background-position: -20px 4px;
}

a:hover {
    font-size: 14pt;
    transition: .2s;
}

#section3 div:hover {
    transition: .3s;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}

#section4 input[type=text]:focus,
textarea:focus,
select:focus {
    transition: .2s;
    border: 2px solid #1877f2;
}
</style>

<body>
    <div id="container">
        <nav id="navbar">
            <div id="navKanan">
                <input title="Search" type="text" name="cari" class="cari" placeholder="Cari disini" />
                <div id="button1">
                    <a href="#section2">About Me</a>
                </div>
                <div id="button2">
                    <a href="#section3">Gallery</a>
                </div>
                <div id="button3">
                    <a href="#section4">Contact Me</a>
                </div>
                <div id="button4">
                    <a href="#" onclick="history.go(-1)">LOG OUT</a>
                </div>
            </div>
        </nav>
        <div id="section1">
            <img class="hero"
                src="https://lh3.googleusercontent.com/a-/AOh14Ggszier37QmxheK3y24nYjR3I4n09hxHVOpYa1LfA=s360-p-rw-no"
                width="150" />
            <p>Hello, saya Ahmad Dzakwan Majiid</p>
            <p class="title">Saya adalah seorang Fullstack Developer</p>
        </div>
        <div id="section2">
            <h3>About Me</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div id="section3">
            <h3>Gallery</h3>
            <div id="img1">
                <img src="https://images.unsplash.com/photo-1501159599894-155982264a55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                    width="100%" />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div id="img2">
                <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                    width="100%" />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div id="img3">
                <img src="https://images.unsplash.com/photo-1644412448696-3836c24bda5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDQ0fGFldTZyTC1qNmV3fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    width="100%" />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div id="section4">
            <form action="#">
                <h3>Contact Me</h3>
                <label>Tanggal</label>
                <select id="tanggal" name="tanggal"></select>
                <select id="bulan" name="bulan"></select>
                <select id="tahun" name="tahun"></select>

                <label>Nama</label>
                <input type="text" name="nama" placeholder="Nama Anda" />

                <label>Email</label>
                <input type="text" name="email" placeholder="Email Anda" />

                <label>Pesan</label>
                <textarea name="pesan" placeholder="Pesan Anda"></textarea>
            </form>
        </div>
    </div>
</body>
<footer>
    <div id="footer">
        <center>Copyright &copy; 2022 2_Ahmad Dzakwan Majiid_Gunadarma</center>
    </div>
</footer>

</html>
