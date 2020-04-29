<?php


$http_client_ip       = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr          = $_SERVER['REMOTE_ADDR'];
 
/* VERIFICO SE O IP REALMENTE EXISTE NA INTERNET */
if(!empty($http_client_ip)){
    $ip = $http_client_ip;
    /* VERIFICO SE O ACESSO PARTIU DE UM SERVIDOR PROXY */
} elseif(!empty($http_x_forwarded_for)){
    $ip = $http_x_forwarded_for;
} else {
    /* CASO EU NÃO ENCONTRE NAS DUAS OUTRAS MANEIRAS, RECUPERO DA FORMA TRADICIONAL */
    $ip = $remote_addr;
}

$json = file_get_contents("https://pro.ip-api.com/json/$ip?fields=region,regionName,city,district,zip,timezone,query&key=NhtXCx6NRB2TDhR");

$obj = json_decode($json,true);

?>
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
    size: "mini",
    sound: false,
    icon: false,
    title: false,
    position: "bottom right",
    showAfterPrevious: true,
    continueDelayOnInactiveTab: false,
    delay: 7000
});
function nr(a, b) {
    a = Math.ceil(a);
    b = Math.floor(b);
    return Math.floor(Math.random() * (b - a + 1)) + a
}
function ar(a) {
    return a[Math.floor(Math.random() * a.length)]
}
var notificacoes = ["<b>" + nr(123, 339) + "</b> pessoas estão visualizando este vídeo agora!", "<b>" + nr(43, 135) + "</b> pessoas compraram <b>LotoPremium</b> na última hora", "<b>" + ar(["Rogério", "Jackson", "Irineu", "Ricardo", "Bernardo", "Rafael", "Elias", "Iago", "Noah", "Kaique", "Benício", "Nathan", "Eduardo", "Bruno", "Lucas", "Hugo", "Enzo", "Isaac", "Oliver", "Gabriel", "Rodrigo", "Rodrigo", "Elias", "Caio", "Enzo", "Oliver", "Renan", "Manoel"]) + "</b> comprou <b>LotoPremium</b> há poucos minutos", "As licenças do sistema estão acabando...", "<b>" + ar(["Ana", "Laura", "Beatriz", "Flávia", "Maria", "Alice", "Helena", "Aline", "Joana", "Fernanda", "Sueli", "Sophia", "Jaqueline", "Elisa", "Rayssa", "Renata", "Catarina", "Isabela", "Alana", "Antonella", "Eloá", "Ana", "Sebastiana", "Stefany", "Mariane", "Letícia", "Marcela"]) + "</b> acabou de comprar <b>LotoPremium</b>", "<b>" +ar(["Ana", "Laura", "Beatriz", "Flávia", "Maria", "Alice", "Helena", "Aline", "Joana", "Fernanda", "Sueli", "Sophia", "Jaqueline", "Elisa", "Rayssa", "Renata", "Catarina", "Isabela", "Alana", "Antonella", "Eloá", "Ana", "Sebastiana", "Stefany", "Mariane", "Letícia", "Marcela"]) + "</b> de " + ar(["<?php echo $obj['city'] . ' - '.$obj['region'];  ?>","Cachoeiro de Itapemirim - ES","Tucuruí - PA","São Leopoldo - RS","Cabedelo - PB", "Palmas - TO","São Luís - MA", "Natal - RN", "Joinville - SC", "Campo Grande - MS", "Porto Velho - RO", "Belém - PA", "Formosa - GO","<?php echo $obj['city'] . ' - '.$obj['region'];  ?>", "Ananindeua - PA","<?php echo $obj['city'] . ' - '.$obj['region'];  ?>"]) + " acabou de comprar <b>LotoPremium</b>"];
for (var i = 0; i < notificacoes.length; i++) {
    setTimeout("Lobibox.notify('success',{msg:notificacoes[" + i + "]})", (i + 1) * 12000)
}
