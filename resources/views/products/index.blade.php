@extends('layouts.web')

@section('content')

<!-- start of the table i wanna use  -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body p-5">
                    
                    <!--  Bootstrap table-->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">view</th>
                                    <th scope="col">edit</th>
                                    <th scope="col">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>

                    <!-- Add rows button-->
                    <a class="btn btn-primary rounded-0 btn-block" id="insertRow" href="{{route('products.create')}}">Add new products</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  .form-control::placeholder {
    font-style: italic;
    font-size: 0.85rem;
    color: #aaa;
}
</style>

<script type="text/javascript">



</script>

@endsection