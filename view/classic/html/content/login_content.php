<div class="w3-row">
  <div class="w3-col s1 m3 l3"></div>
  <div class="w3-col s10 m6 l6 w3-display-middle">
    <div class="w3-card-4 w3-white" style="padding-bottom: 5%">
      <div class="w3-center">
        <img src="#" class="w3-image" alt="Logo" style="width: 100%;">
      </div>
      <div class="w3-container" id="formulario">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label><?php echo $xml_pages_login->username; ?></label>
            <input class="w3-input" type="text" name="username" required>
            <label><?php echo $xml_pages_login->password; ?></label>
            <input class="w3-input" type="password" name="password" required>
            <br>
            <div class="w3-left">
              <input class="btn btn-primary" type="submit"
              value="<?php echo $xml_pages_login->log_in; ?>">
            </div>
            <div class="w3-right">
              <a href="#"><button class="btn btn-default w3-light-grey">
                <?php echo $xml_pages_login->forgot_password; ?>
              </button></a>
            </div>
        </form>
      </div>
    </div>
  </div>
  <div class="w3-col s1 m3 l3"></div>
</div>
