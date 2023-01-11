<section id="contato">
  <div class="uk-container">
    <div uk-grid>
      <div class="uk-width-3-5@m">
        <div>
          <div id="map"></div>
        </div>
      </div>
      <div class="uk-width-1-3@m">
        <div>
          <div class="content" data-aos="fade-down" data-aos-duration="3000">
            <h4>Fale Conosco</h4>
            <div class="blockTel"><a href="tel:+55112494143"><span>Ligue: +55 11</span> 2429.4143</a></div>
            <p>Ou preencha o formulário abaixo e <br> entraremos em contato com você.</p>
          </div>
          <form class="formphp" action="lib/send.php" method="POST">
            <div class="uk-margin">
              <div class="uk-form-controls">
                <input class="uk-input" id="inputNome" type="text" name="nomeCliente" placeholder="Nome *" required>
              </div>
            </div>
            <div class="uk-margin">
              <div class="uk-form-controls">
                <input class="uk-input" id="inputTelefone" type="text" name="telefoneCliente" placeholder="Telefone *" required>
              </div>
            </div>
            <div class="uk-margin">
              <div class="uk-form-controls">
                <input class="uk-input" id="inputMail" type="email" name="emailCliente" placeholder="Email *" required>
              </div>
            </div>
            <div class="uk-margin">
              <div class="uk-form-controls">
                <textarea class="uk-textarea" id="inputMensagem" name="mensagemCliente" rows="5" placeholder="Mensagem *" required></textarea>
              </div>
            </div>
            <div class="uk-margin">
              <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
              <input type="text" class="nao-aparece" name="leaveblank">
            </div>
            <div class="uk-margin">
              <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
              <input type="text" class="nao-aparece" name="dontchange" value="http://">
            </div>
            <div class="uk-margin">
              <label class="labelCheck"><input class="uk-checkbox" type="checkbox" required> Concordo em receber comunicações do Sala 03</label>
            </div>
            <div class="uk-margin">
              <button class="uk-button uk-button-default uk-width-1-1" type="submit">Quero Receber um contato</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $('.formphp').on('submit', function() {
    var emailContato = "webmaster.duettoag@gmail.com";

    var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      data = {};

    that.find('[name]').each(function(index, value) {
      var that = $(this),
        name = that.attr('name'),
        value = that.val();

      data[name] = value;
    });

    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(response) {

        if ($('[name="leaveblank"]').val().length != 0) {
          $('.formphp').html("<div id='form-erro'></div>");
          $('#form-erro').html("<div class='uk-alert-danger' uk-alert><p class='uk-text-right'>Falha no envio! Você pode tentar novamente, ou enviar direto para o e-mail " + emailContato + " </p></div>")
            .hide()
            .fadeIn(1500, function() {
              $('#form-erro');
            });
        } else {

          $('.formphp').html("<div id='form-send'></div>");
          $('#form-send').html("<div class='uk-alert-success' uk-alert><p class='uk-text-right'>Sua mensagem foi enviada com sucesso!</p></div>")
            .hide()
            .fadeIn(1500, function() {
              $('#form-send');
            });
        };
      },
      error: function(response) {
        $('.formphp').html("<div id='form-erro'></div>");
        $('#form-erro').html("<div class='uk-alert-danger' uk-alert><p class='uk-text-right'>Falha no envio! Você pode tentar novamente, ou enviar direto para o e-mail " + emailContato + " </p></div>")
          .hide()
          .fadeIn(1500, function() {
            $('#form-erro');
          });
      }
    });

    return false;
  });
</script>

<!-- Mask -->
<script type="text/javascript">
  $("#inputTelefone").mask("(00) 00000-0000");
</script>