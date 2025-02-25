 //  logo ,list and home 
 window.onscroll = function () { scrollFunction() };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("navbar").style.padding = "20px 10px";
                        document.getElementById("logo").style.fontSize = "20px";
                    } else {
                        document.getElementById("navbar").style.padding = "50px 10px";
                        document.getElementById("logo").style.fontSize = "30px";
                    }
                }
// slide 

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 };
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // 1s
}
// danh mục 
 function openSearch() {
                document.getElementById("myOverlay").style.display = "block";
            }

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
//user
function openUser(){
    document.getElementById("overUser").style.display = "block";
}
function openUser(){
    document.getElementById("overUser").style.display = "none";
}
       
//nnn
window.onclick = function(event) {
    if (event.target == modal) {
        document.getElementById('id01').style.display = "none";
        document.getElementById('id02').style.display = "none";
    }
}
//checkmail
function checkmail() {
        var mail = document.getElementById('gmail').value;
        var reg = /^\w+@[a-zA-Z]{3,}\.com$/i;
        if (reg.test(mail) == false) {
            alert('Gmail bạn Nhập Không Hợp Lệ')
        }
    }
//eye
function MyFunctionSing() {
                    var x = document.getElementById("passwords");
                    var y = document.getElementById("hide11");
                    var z = document.getElementById("hide21");
                    if (x.type === 'password') {
                        x.type = "text";
                        y.style.display = "block";
                        z.style.display = "none";
                    } else {
                        x.type = "password";
                        y.style.display = "none";
                        z.style.display = "block";
                    }
                }

                function MyFunctionSingR() {
                    var x = document.getElementById("passwordsr");
                    var y = document.getElementById("hide12");
                    var z = document.getElementById("hide22");
                    if (x.type === 'password') {
                        x.type = "text";
                        y.style.display = "block";
                        z.style.display = "none";
                    } else {
                        x.type = "password";
                        y.style.display = "none";
                        z.style.display = "block";
                    }
                }
                function MyFunctionLogin() {
                    var x = document.getElementById("passwordin");
                    var y = document.getElementById("hide1");
                    var z = document.getElementById("hide2");
                    if (x.type === 'password') {
                        x.type = "text";
                        y.style.display = "block";
                        z.style.display = "none";
                    } else {
                        x.type = "password";
                        y.style.display = "none";
                        z.style.display = "block";
                    }
                }