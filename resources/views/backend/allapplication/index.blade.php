  @extends('layouts.backend')
  @section('title', 'All Application Index')
  @section('content')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <div class="content-wrapper">
          <div class="container-full">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                  <div class="d-flex align-items-center">
                      <div class="me-auto">
                          <h3 class="page-title">All Application Items</h3>
                          <div class="d-inline-block align-items-center">
                              <nav>
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                      </li>
                                      <li class="breadcrumb-item" aria-current="page">Application</li>
                                      <li class="breadcrumb-item active" aria-current="page">All Items</li>
                                  </ol>
                              </nav>
                          </div>
                      </div>

                  </div>
              </div>

              <!-- Main content -->
              <section class="content">
                  <div class="row">

                      <div class="col-12">

                          <div class="box">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Application Management</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                  <div class="table-responsive">
                                      <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                          <thead>
                                              <tr>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Phone</th>
                                                  <th>Notes</th>
                                                  <th>Manage</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach ($allData as $key => $data)
                                                  <tr>
                                                      <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                                                      <td>{{ $data->email }}</td>
                                                      <td>{{ $data->phone }}</td>
                                                      <td>
                                                          <textarea class="form-control notes-field" rows="3" data-id="{{ $data->id }}">{{ $data->notes }}</textarea>
                                                      </td>

                                                      <td>
                                                          <a href="{{ route('admin.all-application.view', $data->id) }}"
                                                              class="btn btn-info"> View</a>
                                                          <a id="delete"
                                                              href="{{ route('admin.all-application.delete', $data->id) }}"
                                                              class="btn btn-danger"> Delete</a>
                                                      </td>
                                              @endforeach


                                          </tbody>

                                      </table>
                                  </div>
                              </div>
                              <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                      </div>


                  </div>
                  <!-- /.row -->
              </section>
              <!-- /.content -->

          </div>
      </div>
     <script>
$(document).ready(function () {

    let timer;

    $(document).on('keyup', '.notes-field', function () {

        clearTimeout(timer);

        let textarea = $(this);
        let notes = textarea.val();
        let id = textarea.data('id');

        timer = setTimeout(function () {

            $.ajax({
                url: "{{ route('notes.update') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    notes: notes
                },
                success: function () {

                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: 'Saved Successfully',
                        showConfirmButton: false,
                        timer: 1000
                    });

                },
                error: function (xhr) {
                    console.log(xhr.responseText);

                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Ajax failed. Check console.'
                    });
                }
            });

        }, 800);

    });

});
</script>
  @endsection
