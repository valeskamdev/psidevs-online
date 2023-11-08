const campoCPF = document.getElementById('cpf');
const campoTelefone = document.getElementById('telefone');
const campoCRP = document.getElementById('crp');

$(campoCPF).mask("000-000-000-00");
$(campoTelefone).mask("(00) 00000-0000");
$(campoCRP).mask("00/000000-00");

// $(function() {
//   $('#valorConsulta').maskMoney({
//     allowNegative: false, // Impede valores negativos
//     allowZero: false, // Impede o valor zero
//     precision: 2, // Duas casas decimais
//     thousands: '.', // Separador de milhares
//     decimal: ',', // Separador decimal
//   });
// });