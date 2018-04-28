
      <aside>
        <form id="subscribe" name="subscribe" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input id="prodId" name="what" type="hidden" value="survey">
          <div class="sidebox">
            <div class="form-group fm <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label>Full Name:</label>
                <input type="text" name="name" class="form-control in" value="<?php echo $name; ?>">
                <span id="nameErr" class="error"><?php echo $name_err; ?></span>
            </div><br />
            <div class="form-group fm radio_pick">
                <label>Which animation company do you like most?</label><br />
                <input type="radio" name="favorite" value="disney"><label>Disney</label> <br>
                <input type="radio" name="favorite" value="dreamworks"><label>DreamWorks</label> <br>
                <input type="radio" name="favorite" value="pixar"><label>Pixar</label>
                <span id="selectErr" class="error"><?php echo $select_err; ?></span>
            </div>

            <div class="form-group fm bt">
                <input type="submit" class="btn bg-button-gold" value="Submit">
            </div>
          </div>
      </form>
      </aside>
