<!-- Button trigger modal -->
@extends('welcome')
@section('content')
<script>
   
  </script>
     <center>
        <button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            Add Product
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">CRUD</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="insertData" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="id" id="" class="form-control" hidden>
                            <div class="mb-2">
                                <input type="text" name="name" id="" class="form-control"
                                    placeholder="Enter Product Name">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="price" id="" class="form-control"
                                    placeholder="Enter Product Price">
                            </div>
                            <div class="mb-2">
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-outline-danger fw-bold fs-6 rounded-pill">Add
                                Record</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </center> 
     <!-- Modal -->
    <div class="container">
        <table class="table mt-5">
            <thead class="bg-danger text-white fw-bold">
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
            </thead>
            <tbody class="text-danger bg-light fs-4">
                @foreach ($data as $value)
                    <tr>
                        {{-- <td class="pt-5">{{ $value['Id'] }}</td> --}}
                        <td class="pt-5">{{ $value['PName'] }}</td>
                        <td class="pt-5">{{ $value['PPrice'] }}</td>
                        <td class="pt-5"><img src="images/{{ $value['PImage'] }}" width="50px" height="50px"></td>
                        <td class="pt-5"><button><a href="editData/{{ $value->Id }}">Edit</a></button></td>
                        <td class="pt-5"><button><a data-id="{{ $value->Id }}" href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $value->Id }}">Delete</a></button></td>
                    </tr>
                    <div  class="modal fade" id="exampleModal{{ $value->Id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                             <span>Are You sure You Want to Delete?</span>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="deleteData/{{ $value['Id'] }}" >
                              <button onclick="document.getElementById('Id').style.display='block'" type="button" class="btn btn-primary">Delete</button>
                            </a>
                            </div>
                          </div>
                        </div>
                      </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
