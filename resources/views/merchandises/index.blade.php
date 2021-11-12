@extends('pages.base')


@section('content')
    

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Merchandises</h1>

            <table class="table table-bordered table-striped table-dark">
                <thead>
                    <tr class="bg-secondary">
                        <th>Merchandise ID</th>
                        <th>Brand Name</th>
                        <th>Product Name</th>
                        <th>Category ID</th>
                        <th>Retail Price</th>
                        <th>Wholesale Price</th>
                        <th>Unit ID</th>
                        <th>wholesale Quantity</th>
                        <th>Quantity Stock</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    <?php foreach($merchandises as $m): ?>
                        <tr>
                            <td><?= $m->id ?> </td>
                            <td><?= $m->brand_name ?> </td>
                            <td><?= $m->product_name ?> </td>
                            <td><?= $m->category_id ?> </td>
                            <td><?= $m->retail_price ?> </td>
                            <td><?= $m->wholesale_price ?> </td>
                            <td><?= $m->unit_id ?> </td>
                            <td><?= $m->wholesale_qty ?> </td>
                            <td><?= $m->qty_stock ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

<style>
     h1{
        color: rgb(54, 52, 52);
    }
    th{
        color:white;
    }
    </style>