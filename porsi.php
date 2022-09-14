<li>
            <div id="liveAlertPlaceholder"></div>
            <button type="button" class="btn btn-primary" id="liveAlertBtn" href="./ficheros/creation.php">NEW</button>
            <script>
                
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert( '<?php $ruta = "./ficheros/creation.php";
    echo $ruta;
    while ($ruta = fgets($fichero_url, 1024)){
        $texto .= $ruta;
     }
     return $texto;
  

    ?>', 'success')
  })
}

</script>
</li>