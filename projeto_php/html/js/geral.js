window.addEventListener("load", function(){
    
    var voltar_ao_topo = document.getElementById('voltar_ao_topo')

    window.onscroll = function() {scrollFunction()};

    $('#voltar_ao_topo').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    })

})


function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        voltar_ao_topo.style.display = "block";
    } else {
        voltar_ao_topo.style.display = "none";
    }
  }