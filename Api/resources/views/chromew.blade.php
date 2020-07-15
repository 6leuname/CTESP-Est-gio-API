<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>API</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="/chrome">Chrome</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/chrome">Chrome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/chromep">Chromep</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/chromew">Choromew</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="app">
    <main class="py-4">
      <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Data_Chrome_W
        </h1>
        <hr>
        <div class="container">
          <form action="/pesquisa" method="POST">
            @csrf
            {{method_field('PATCH')}}
            <div class="form-group col-md-12">
              <label for="exampleInputEmail1">Word</label>
              <input type="text" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
            </div>
            <label for="exampleFormControlSelect1">Order:</label>
            <div class="form-row">

              <div class="form-group col-md-10">
                <select class="form-control" name="min" id="FormControlSelect1">
                  <option value="1">Primed</option>
                  <option value="2">Seen</option>
                  <option value="3">Clicked</option>
                  <option value="4">Selected</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <select class="form-control" name="order" id="FormControlSelect2">
                  <option value="asc">Asc</option>
                  <option value="desc">Desc</option>
                </select>
              </div>
            </div>
          </form>
          <button onclick="post()" class="btn btn-outline-primary ml-3">Pesquisar</button>
        </div>
        <hr>
        <div class="row">
          <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info"
            style="width: 100%;" width="100%" cellspacing="0">
            <thead>
              <tr role="row">
                  <th rowspan="1" colspan="1">ID</th>
                  <th rowspan="1" colspan="1">Activity ID</th>
                  <th rowspan="1" colspan="1">Word</th>
                  <th rowspan="1" colspan="1">Primed</th>
                  <th rowspan="1" colspan="1">Seen</th>
                  <th rowspan="1" colspan="1">Clicked</th>
                  <th rowspan="1" colspan="1">Selected</th>
                </tr>
            </thead>
            <tfoot>
              <tr>
                <th rowspan="1" colspan="1">ID</th>
                <th rowspan="1" colspan="1">Activity_ID</th>
                <th rowspan="1" colspan="1">Word</th>
                <th rowspan="1" colspan="1">Primed</th>
                <th rowspan="1" colspan="1">Seen</th>
                <th rowspan="1" colspan="1">Clicked</th>
                <th rowspan="1" colspan="1">Selected</th>
              </tr>
            </tfoot>
            <tbody id="itens">
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
  <script>
    $(document).ready(function(){
      ready();
    });
    function write(res){
        let item;
        var itens = document.getElementById("itens");
        itens.innerHTML='';
        res.forEach(element => {
          item = document.createElement('tr');
          item.className = "odd";
          item.setAttribute('role', "row");
          item.innerHTML='<td>'+element.ID+'</td>'
          +'<td>'+element.Activity_ID   +'</td>'
          +'<td>'+element.Word          +'</td>'
          +'<td>'+element.Primed        +'</td>'
          +'<td>'+element.Seen          +'</td>'
          +'<td>'+element.Clicked       +'</td>'
          +'<td>'+element.Selected      +'</td>';
          itens.appendChild(item);
        });
    };
    function clear(){
        let item;
        var itens = document.getElementById("itens");
        itens.innerHTML='';
    };
    function ready(){
      fetch('/api', {
      method: 'GET',
      headers: {
        "table":  "datachromew"
      },
    })
      .then(function(res){
        return res.json();
      }).then(function(res){
        let item;
        var itens = document.getElementById("itens");
        itens.innerHTML='';
        res.forEach(element => {
          item = document.createElement('tr');
          item.className = "odd";
          item.setAttribute('role', "row");
          item.innerHTML='<td>'+element.ID+'</td>'
          +'<td>'+element.Activity_ID   +'</td>'
          +'<td>'+element.Word          +'</td>'
          +'<td>'+element.Primed        +'</td>'
          +'<td>'+element.Seen          +'</td>'
          +'<td>'+element.Clicked       +'</td>'
          +'<td>'+element.Selected      +'</td>';
          itens.appendChild(item);
        });
        console.log(item);
        console.log(res);
      })
    };
    function post(){
      fetch('/api', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': $("input[name='_token']").val()
      },
      body: JSON.stringify({
        email:  $("#InputEmail1").val(),
        table:  "datachromew",
        orderBy:$("#FormControlSelect1").val(),
        order:  $("#FormControlSelect2").val()
      })
    })
    .then(function(res){
        return res.json();
      })
    .then(function(res){
      clear();
      write(res.data);
      });
    }
    </script>
</body>

</html>