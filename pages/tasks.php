<?php
  $dir = "./pages/data/tasks.json";
  $data = json_decode(file_get_contents($dir), true);
?>

<?php
        $daily = $data['daily'];
        $three = $data['three'];
        $weekly = $data['weekly'];
?>

<div class="row">
  <div class="col-lg-12 mt-3">
    <div class="progress">
      <div id="progress" class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary align-items-start">
        <div class="d-flex w-100 justify-content-between align-middle">
          <h3 class="mb-3">Daily</h3>
          <button id="btnCheck" type="button" class="btn btn-primary btn-lg btn-block">Check All</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="list-group checkbox-container" id="dailyGroup">
      <?php foreach($daily as $key => $value): ?>
      <label for="<?php echo $key ?>" class="list-group-item list-group-item-action py-3">
        <input type="checkbox" class="form-check-input me-2" id="<?php echo $key ?>" unchecked><?php echo $value ?>
      </label>
      <?php endforeach ?>
      <label for="daily8" class="list-group-item list-group-item-action py-3">
        <input type="checkbox" class="form-check-input me-2" id="daily8" unchecked>
        Kill Boops (in the secret area) and Dr Defecaus if possible
        <span class="badge bg-info mx-4" id="boopsBadge">  0:00  </span>
      </label>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary align-items-start">
        <div>
          <h3 class="mb-3">Every Three Days</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="list-group checkbox-container">
      <?php foreach($three as $key => $value): ?>
      <label for="<?php echo $key ?>" class="list-group-item list-group-item-action py-3">
        <input type="checkbox" class="form-check-input me-2" id="<?php echo $key ?>" unchecked><?php echo $value ?>
      </label>
      <?php endforeach ?>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary align-items-start">
        <div>
          <h3 class="mb-3">Weekly</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="list-group checkbox-container">
      <?php foreach($weekly as $key => $value): ?>
      <label for="<?php echo $key ?>" class="list-group-item list-group-item-action py-3">
        <input type="checkbox" class="form-check-input me-2" id="<?php echo $key ?>" unchecked><?php echo $value ?>
      </label>
      <?php endforeach ?>
    </div>
  </div>
</div>
