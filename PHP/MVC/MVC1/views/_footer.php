<!-- Footer-->
<footer class="py-5 bg-dark fixed-bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Info.com</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            let prtcl=document.getElementById("particle")
            function setParticles(num){
            for (let i=0; i<num; i++){
                let prt=document.createElement("div")
                prt.setAttribute("class","particles")
                prt.style.left=100*Math.random()+"%"
                prt.animate([{
                    transform: "translate(-200px,0) scale("+Math.random()*10+")"
                },{
                    transform: "translate("+Math.random()*500+"px,112vh) scale("+Math.random()*2+")",
                    background: "rgb(255, 255, 255);",
                    boxShadow: "0 0 4px rgb(255, 255, 255);,0 0 8px rgb(255, 255, 255);",
                    opacity: Math.random()*1.4
                }],{
                    duration: Math.random()*400+8000,
                    delay: -i++*40,
                    iterations: Infinity
                })
                prtcl.appendChild(prt)
            }
        }
        setParticles(300)
        </script>
    </body>
</html>