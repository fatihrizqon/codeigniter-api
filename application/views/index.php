<div class="mdl-grid">
  <div class="mdl-layout-spacer" align="center">
    <!-- spacer -->
  </div>

  <div class="mdl-site__title mdl-cell mdl-cell--4-col">
    <form class="reservation">
    <md-input-container>
      <label>From</label>
      <md-select name="origin" ng-model="origin" required>
        <md-option value="YK">Yogyakarta</md-option>
        <md-option value="SUB">Surabaya</md-option>
        <md-option value="BD">Bandung</md-option>
      </md-select>
      <div class="errors" ng-messages="bookForm.favoriteColor.$error">
        <div ng-message="required">Required</div>
      </div>
    </md-input-container>
    <br>
    <md-input-container>
      <label>To</label>
      <md-select name="destination" ng-model="destination" required>
        <md-option value="YK">Yogyakarta</md-option>
        <md-option value="SUB">Surabaya</md-option>
        <md-option value="BD">Bandung</md-option>
      </md-select>
      <div class="errors" ng-messages="bookForm.favoriteColor.$error">
        <div ng-message="required">Required</div>
      </div>
    </md-input-container>
    <br>
    <!-- <md-datepicker name="departure" ng-model="departure" md-placeholder="Enter date"></md-datepicker> -->
    <md-datepicker
    ng-model="myDate"
    md-placeholder="Departure"
    md-min-date="minDate"
    md-max-date="maxDate"
    ></md-datepicker>

    <md-button href="#" class="md-button">
      Search
    </md-button>
    <hr>
    </form>
  </div>

  <div class="mdl-layout-spacer" align="center">
    <!-- spacer -->
  </div>
</div>
