<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">    
          <h1>Notas Fiscais</h1>
            <div class="card">
              <table class="table table-striped table-light">
                  <thead>
                    <tr>
                      <th scope="col">Key</th>
                      <th scope="col">Produto</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <div class="col-12 d-flex justify-content-end mt-3 mr-3">
                        <div class="d-flex justify-content-end">
                          <a class="btn btn-secondary btn-sm btn-block" href="{{ url('') }}">Novo</a>  
                        </div>
                      </div>                    
                    </tr>
                      @foreach ($notasFiscais as $notaFiscal )
                          <tr>
                              <td> <p>{{$notaFiscal->key}}</p></td>
                              <td> <p>{{$notaFiscal->emissor}}</p></td>
                              <td>
                                <div class="d-flex justify-content-center">
                                  <a type="button" class="btn btn-secondary" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                  </a>
                                
                                 
                                </div>                                
                              </td>
                          </tr>                
                      @endforeach
                  </tbody>
                </table>
            </div>                
           </div>
      </div>
  </div>   