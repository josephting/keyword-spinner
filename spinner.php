<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keyword Spinner Demo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css" integrity="sha256-uHu2MAd1LvCOVEAhvMld4LpJi7dUGS7GVzvG/5B3hlo=" crossorigin="anonymous" />
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Keyword Spinner Demo</h1>
        <form id="spinner">
          <div class="form-group">
            <label for="input">元文</label>
            <textarea id="input" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">実行</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3>処理後</h3>
        <textarea id="result" class="form-control" readonly></textarea>
      </div>
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>
