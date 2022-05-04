<!-- display the two checkin buttons, one for employees, one for visitors -->

<form action="index.php" method="post">
    <div id="userBtnContainer">
        <button class="btn btn-primary btn-block" type="submit" name="employee">
          <div class="card">
            <i class="fa fa-users fa-5x"></i>
            <h3 class="card-footer m-0" style="text-align:center;">Работник</h3>
          </div>
        </button>

        <button class="btn btn-success btn-block" type="submit" name="visitor">
          <div class="card">
            <i class="fa fa-ticket fa-ticket-alt fa-5x"></i>
            <h3 class="card-footer m-0" style="text-align:center">Посетитель</h3>
          </div>
        </button>
      </div>
</form>