<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <title>vue test</title>
  <style>
    .modal-mask {
      position: fixed;
      z-index: 9998;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, .5);
      display: table;
      transition: opacity .3s ease;
    }

    .modal-wrapper {
      display: table-cell;
      vertical-align: middle;
    }

    .modal-container {
      width: 300px;
      margin: 0px auto;
      padding: 20px 30px;
      background-color: #fff;
      border-radius: 2px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
      transition: all .3s ease;
      font-family: Helvetica, Arial, sans-serif;
    }

    .modal-header h3 {
      margin-top: 0;
      color: #42b983;
    }

    .modal-body {
      margin: 20px 0;
    }

    .modal-default-button {
      float: right;
    }

    .modal-enter {
      opacity: 0;
    }

    .modal-leave-active {
      opacity: 0;
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
  </style>
</head>
<body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Dashboard</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>
  <main role="main" style="margin-top: 30px;">
    <!-- section 1 -->
    <section>
      <div class="container-fluid" style="margin-bottom: 20px;">
        <div class="row">
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div>
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center icon-warning">
                        <i class="fa fa-server fa-4x"></i>
                      </div>
                    </div>
                    <div class="col-7">
                      <div class="numbers"><p>Capacity</p>105GB</div>
                    </div>
                  </div>
                  <div>
                    <hr>
                    <div class="stats text-center">
                      <button id="show-modal" class="btn btn-info" @click="showModal = true">details</button>
                      <modal v-if="showModal" @close="showModal = false">
                        <h3 slot="header">상세보기</h3>
                      </modal>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div>
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center icon-warning">
                        <i class="fal fa-money-check-alt"></i>
                      </div>
                    </div>
                    <div class="col-7">
                      <div class="numbers"><p>Profit</p>1,059,000</div>
                    </div>
                  </div>
                  <div>
                    <hr>
                    <div class="stats"><i class="ti-reload"></i> Updated now</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div>
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center icon-warning">
                        <i class="ti-server"></i>
                      </div>
                    </div>
                    <div class="col-7">
                      <div class="numbers"><p>Errors</p> 23</div>
                    </div>
                  </div>
                  <div>
                    <hr>
                    <div class="stats"><i class="ti-reload"></i> Updated now</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div>
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center icon-warning">
                        <i class="ti-server"></i>
                      </div>
                    </div>
                    <div class="col-7">
                      <div class="numbers"><p>Followers</p>1,203</div>
                    </div>
                  </div>
                  <div>
                    <hr>
                    <div class="stats"><i class="ti-reload"></i> Updated now</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">graph</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- -->
    <section>
      <!-- demo root element -->
      <div id="demo">
        <form id="search">
          Search <input name="query" v-model="searchQuery">
        </form>
        <grid
          :data="gridData"
          :columns="gridColumns"
          :filter-key="searchQuery">
        </grid>
      </div>
    </section>
  </main>
  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
    </div>
  </footer>
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/vue"></script>
   <!-- template for the modal component -->
  <script type="text/x-template" id="modal-template">
    <transition name="modal">
      <div class="modal-mask">
        <div class="modal-wrapper">
          <div class="modal-container">

            <div class="modal-header">
              <slot name="header">
                default header
              </slot>
            </div>

            <div class="modal-body">
              <slot name="body">
                Daily Capacity<br/>
                Monthly Capacity
              </slot>
            </div>

            <div class="modal-footer">
              <slot name="footer">
                <button class="modal-default-button" @click="$emit('close')">
                  close
                </button>
              </slot>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </script>
  <!-- grid template component-->
  <script type="text/x-template">
    <table>
      <thead>
        <tr>
          <th v-for="key in columns"
              @click="sortBy(key)"
              :class=""
          >
          {{ key | capitalize }}
          <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'"></span>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="entry in filteredData">
          <td v-for="key in columns">
            {{entry[key]}}
          </td>
        </tr>
      </tbody>
    </table>
  </script>

  <!-- script -->
  <script>
    // 뷰 컴포넌트 등록 > 뷰 오브젝트 생성
    // register modal component
    Vue.component('modal', {
      template: '#modal-template'
    })
    // grid component
    Vue.component('grid', {
      template: '#grid-template',
      props: {
        data: Array,
        columns: Array,
        filterKey: String
      },
      data: function () {
        var sortOrders = {}
        this.columns.forEach(function (key) {
          sortOrders[key] = 1
        })
        return {
          sortKey: '',
          sortOrders: sortOrders
        }
      },
      computed: {
        filteredData: function () {
          var sortKey = this.sortKey
          var filterKey = this.filterKey && this.filterKey.toLowerCase()
          var order = this.sortOrders[sortKey] || 1
          var data = this.data
          if (filterKey) {
            data = data.filter(function (row) {
              return Object.keys(row).some(function (key) {
                return String(row[key]).toLowerCase().indexOf(filterKey) > -1
              })
            })
          }
          if (sortKey) {
            data = data.slice().sort(function (a, b) {
              a = a[sortKey]
              b = b[sortKey]
              return (a === b ? 0 : a > b ? 1 : -1) * order
            })
          }
          return data
        }
      },
      filters: {
        capitalize: function (str) {
          return str.charAt(0).toUpperCase() + str.slice(1)
        }
      },
      methods: {
        sortBy: function (key) {
          this.sortKey = key
          this.sortOrders[key] = this.sortOrders[key] * -1
        }
      }
    })

    // start app
    new Vue({
      el: '.stats',
      data: {
        showModal: false
      }
    })

    var demo = new Vue({
      el: "#demo",
      data: {
        searchQuery: '',
        gridColumns: ['name', 'power'],
        gridData: [
          { name: 'Chuck Norris', power: Infinity },
          { name: 'Bruce Lee', power: 9000 },
          { name: 'Jackie Chan', power: 7000 },
          { name: 'Jet Li', power: 8000 }
        ]
      }
    })
  </script>
</body>
</html>
