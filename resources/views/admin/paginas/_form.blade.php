<div class="row" style="padding: 20px">
    <div class="col-sm-12">
        <p>Campos com <font color="red">*</font> são obrigatórios!</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="input-field">
                <div class="form-group fg-line">
                    <label>Título: *</label>
                    <input type="text" name="titulo" class="form-control input-sm"
                           value="{{ isset($pagina->titulo)? $pagina->titulo : '' }}" required>
                </div>
            </div>
        </div>
    </div>

    @if(isset($pagina->texto))
        <div class="input-field">
            <div class="form-group fg-line">
                <label>Texto:</label>
                <textarea class="html-editor" name="texto" class="form-control" rows="5">
        {{ isset($pagina->texto)? $pagina->texto : '' }}
    </textarea>
            </div>
        </div>
    @endif

    @if(isset($pagina->descricao))
        <div class="input-field">
            <div class="form-group fg-line">
                <label>Descricao:</label>
                <textarea class="html-editor" name="descricao">
                 {{ isset($pagina->descricao)? $pagina->descricao : '' }}
                </textarea>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-4">
            @if(isset($pagina->email))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>E-mail: </label>
                        <input type="text" name="email" class="form-control input-sm"
                               value="{{ isset($pagina->email)? $pagina->email : ''  }}">
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-4">
            @if(isset($pagina->facebook))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Link Facebook:</label>
                        <input type="text" name="facebook" class="form-control input-sm"
                               value="{{ isset($pagina->facebook)? $pagina->facebook : ''  }}">
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-4">
            @if(isset($pagina->google))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Link Google+:</label>
                        <input type="text" name="google" class="form-control input-sm"
                               value="{{ isset($pagina->google)? $pagina->google : ''  }}">
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            @if(isset($pagina->twitter))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Link Twitter:</label>
                        <input type="text" name="twitter" class="form-control input-sm"
                               value="{{ isset($pagina->twitter)? $pagina->twitter : ''  }}">
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-4">
            @if(isset($pagina->linkedin))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Link LinkedIn</label>
                        <input type="text" name="linkedin" class="form-control input-sm"
                               value="{{ isset($pagina->linkedin)? $pagina->linkedin : ''  }}">
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-4">
            @if(isset($pagina->youtube))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Link YouTube </label>
                        <input type="text" name="youtube" class="form-control input-sm"
                               value="{{ isset($pagina->youtube)? $pagina->youtube : ''  }}">
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            @if(isset($pagina->instagram))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Instagram: </label>
                        <input type="text" name="instagram" class="form-control input-sm"
                               value="{{ isset($pagina->instagram)? $pagina->instagram : ''  }}">
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-4">
            @if(isset($pagina->github))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>GitHub</label>
                        <input type="text" name="github" class="form-control input-sm"
                               value="{{ isset($pagina->github)? $pagina->github : ''  }}">
                    </div>
                </div>
            @endif
        </div>
        <div class="col-sm-4">
            @if(isset($pagina->vimeo))
                <div class="input-field">
                    <div class="form-group fg-line">
                        <label>Vimeo</label>
                        <input type="text" name="vimeo" class="form-control input-sm"
                               value="{{ isset($pagina->vimeo)? $pagina->vimeo : ''  }}">
                    </div>
                </div>
            @endif
        </div>
    </div>

    @if(isset($pagina->imagem))
        <div class="row">
            <div class="col-sm-4">
                <label>Imagem:</label>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                    <div>
            <span class="btn btn-info btn-file">
            <span class="fileinput-new">Selecione - Trocar</span>
                <span class="fileinput-exists"> a Imagem</span>
                <input type="file" name="imagem">
            </span>
                        <a href="#" class="btn btn-danger fileinput-exists"
                           data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <label>Imagem Atual:</label>
                <div class="input-field">
                    <div class="form-group">
                        @if(isset($pagina->imagem))
                            <img width="350" src="{{ asset($pagina->imagem) }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(isset($pagina->mapa))
        <br/>
        <div class="input-field">
            <div class="form-group fg-line">
                <label>Mapa: </label>
                <textarea name="mapa" class="form-control input-sm" rows="5">
                {{ isset($pagina->mapa)? $pagina->mapa : ''  }}
            </textarea>
            </div>
        </div>
    @endif
</div>