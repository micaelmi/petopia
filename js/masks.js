$(document).ready(function () {
  $("#cpf-cnpj").on("input", function () {
    var value = $(this).val().replace(/\D/g, ""); // Remove caracteres não numéricos

    if (value.length <= 11) {
      $(this).unmask().mask("000.000.000-000"); // Remove a máscara atual e aplica a máscara de CPF
    } else {
      $(this).unmask().mask("00.000.000/0000-00"); // Remove a máscara atual e aplica a máscara de CNPJ
    }
  });
  $("#cep").on("input", function () {
    var value = $(this).val().replace(/\D/g, ""); // Remove caracteres não numéricos
    $(this).mask("00000-000"); // Remove a máscara atual e aplica a máscara de CNPJ
  });
});
