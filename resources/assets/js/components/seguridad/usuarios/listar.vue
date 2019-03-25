<template>
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#primaryModal"><i class="fa fa-plus"></i>&nbsp; Nuevo</button>
                <button type="button" disabled class="btn btn-success btn-sm" data-toggle="modal" data-target="#primaryModal"><i class="fa fa-plus"></i>&nbsp; Editar</button>
                <button type="button" disabled class="btn btn-warning btn-sm" data-toggle="modal" data-target="#primaryModal"><i class="fa fa-search"></i>&nbsp; Consultar</button>
                <button type="button" disabled class="btn btn-danger btn-sm" data-toggle="modal" data-target="#primaryModal"><i class="fa fa-trash"></i>&nbsp; Anular</button>
            </div>
            <div class="card-body">
              <div>
                <p>Current page: {{ currentPage }}</p>
                <v-pagination v-model="currentPage" :page-count=2></v-pagination>
              </div>
              
              <table-component
                :data = fetchData
                sort-by = "id"
                sort-order = "asc"
                table-class = "table table-responsive-sm table-bordered table-striped table-sm"
                :pagination = currentPage
              >
                <table-column show="id" label="Codigo"></table-column>
                <table-column show="name" label="Nombre" data-type="string"></table-column>
                <table-column show="email" label="Correo" :filterable="false"></table-column>
              </table-component>

            </div>
          </div>
        </div>        
    </div>    

</template>

<script>

    import datatables from 'datatables.net-bs4';

    export default {
        data() {
            return {
                usuarios: [],
                urlUsuarios: "usuarios",                
                currentPage: 1,
            }
        },
        mounted() {
            this.getUsuarios();
        },
        methods: {
           async fetchData({ page, filter, sort }) {
                const response = await axios.get('usuarios', { page });
 
                // An object that has a `data` and an optional `pagination` property
                return response;
            },
            setDatatable(){
                $(document).ready( function () {
                    var tblUsuario = $("#tblUsuarios").dataTable({
                        sDom: '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"pull-left"i><"pull-right"p>>>',
                        language: {
                          url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                        }
                    });
                });
            },
            getUsuarios() {                
                axios.get(this.urlUsuarios).then((response) => {
                    this.usuarios = response.data;
                    this.setDatatable();
                });
            }
        },computed: {
          rows() {
            return this.usuarios.length
          }
        }
    }
</script>
