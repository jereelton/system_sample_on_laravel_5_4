@extends('layouts.admin')

@section('content')

    <!-- Main content -->
    <section class="content-header">
      <h1>
        Control Panel
        <small>Users</small>
      </h1>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Registred Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <!--<h3>53<sup style="font-size: 20px">%</sup></h3>-->
              <h3>53</h3>

              <p>Online Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Locked Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-locked"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Removed Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-delete"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <section class="content user_list">

      <div class="box-body no-padding">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width: 10px; text-align: center;">#</th>
              <th style="text-align: center;">User Level</th>
              <th>Nome</th>
              <th>Email</th>
              <th style="width: 140px;">Data Cadastro</th>
              <th style="width: 140px;">Data Atualização</th>
              <th style="width: 250px;">Data Atualização</th>
            </tr>
          </thead>
          <tbody>
          @unless(empty($listusers))
            @foreach ($listusers as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td style="text-align: center;">{{ $user->user_level }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td/>
              <td>{{ $user->created_at }}</td>
              <td>{{ $user->updated_at }}</td>
              <td>
                <a href="/edituser/{{ $user->id }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                <a href="/deleteuser/{{ $user->id }}" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-warning btn-xs"><i class="fa fa-lock"></i> Bloquear</a>
                <a href="/deleteuser/{{ $user->id }}" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
              </td>
            </tr>
            @endforeach
          @endunless
          </tbody>
        </table>
      </div>
    </section>
@endsection