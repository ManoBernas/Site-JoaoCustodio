@extends('layouts.admin')

@section('content')
{{-- <div class="mb-4">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="mb-3">
   <label for="exampleInputIconPassword">Password</label>
   <div class="input-group">
        <input type="password" class="form-control" id="password" placeholder="Password" aria-label="Password">
        <span class="input-group-text" id="basic-addon3">
            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
        </span>
    </div>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Default file input example</label>
    <input class="form-control" type="file" id="formFile">
</div> --}}
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Projetos</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Listar Projetos</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
      <table class="table align-items-center mb-0">
        <thead>
          <tr>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria do Produto</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fotografia</th>
            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>
        <tbody>

        @foreach ($projetos as $projeto)
        <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm"></h6>
                  <p class="text-xs text-secondary mb-0">{{ $projeto->categoria->designacao }}</p>
                </div>
              </div>
            </td>
        {{--<td>
              <p class="text-xs font-weight-bold mb-0">Carro</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-success">Disponível</span>
            </td>
            <td class="align-middle text-center">
                <div>
                    <img src="../assets/img/slider1.jpg" class="avatar avatar-sm me-1" alt="user1">
                </div>
            </td>
          </tr>
          <tr>--}}
            {{-- <td>{{ $produto->designacao }}</td> --}}

            {{-- <td>{{ $produto->categoria->designacao }}</td> --}}

            {{-- <td>{{ $produto->responsavel }}</td>
            <td>18-09-{{ $produto->dataInicio }}</td>
            <td><a href="{{ $produto->github }}">{{ $produto->github }}</a></td>
          </tr>--}}
        @endforeach

          {{-- <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">Miriam Eric</h6>
                  <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">Programtor</p>
              <p class="text-xs text-secondary mb-0">Developer</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
            </td>
            <td class="align-middle">
              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>
            </td>
          </tr> --}}
        </tbody>
      </table>
    </div>
  </div>
@endsection
