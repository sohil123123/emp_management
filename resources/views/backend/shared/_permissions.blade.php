<?php
$chk_class = isset($key) ? 'perm_chek_'.$key : 'perm_chek_rol';
$key = isset($key) ? $key : '';
?>

<div class="row">
    <div class="col-md-12">
        <div id="accordion" role="tablist">
            <div class="card mb-0">
                <div class="card-header" id="heading_{{isset($key) ? $key : 'permission'}}" role="tab">
                    <strong><a data-toggle="collapse" href="#collapse_{{isset($key) ? $key : 'permission'}}" aria-expanded="{{ isset($role_nm) && $role_nm == 'admin' ? 'false' : isset($closed) ? 'false' : 'true'}}" aria-controls="collapse_{{isset($key) ? $key : 'permission'}}">{{ isset($title) ? $title : 'Override Permissions' }} {!! isset($model) ? '<span class="text-danger">(' . $model->getDirectPermissions()->count() . ')</span>' : '' !!}</a></strong>
                    @if(isset($role_nm) && $role_nm != 'admin')
                       <!--  <div class="card-header-actions">
                            <input type="checkbox" class="checkAll_{{$key}}" /> <b>Check All</b>
                        </div> -->
                    @endif
                </div>
                <div class="collapse {{ isset($role_nm) && $role_nm == 'admin' ? ' ' : isset($closed) ? '' : 'show' }}" id="collapse_{{isset($key) ? $key : 'permission'}}" role="tabpanel" aria-labelledby="heading_{{isset($key) ? $key : 'permission'}}" data-parent="#accordion">
                    <div class="card-body">
                        
                        <div class="row cat_row">
                            @foreach($permissions as $perm)
                                <?php
                                    $per_found = null;
                                    // echo "<pre>";print_r($role->toArray());
                                    if( isset($role) ) {
                                        $per_found = $role->hasPermissionTo($perm->name);
                                    }

                                    if( isset($model)) {
                                        $per_found = $model->hasDirectPermission($perm->name);
                                    }
                                ?>
                                <div class="form-group col-sm-3">
                                    <div class="form-check form-check-inline mr-5">
                                        {!! Form::checkbox("permissions[]", $perm->name, $per_found, isset($options) ? $options : ['class' => $chk_class]) !!} 
                                        &nbsp;<label class="form-check-label{{ str_contains($perm->name, 'delete') ? '' : '' }}">{{ ucwords(str_replace("_"," ",$perm->name)) }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
$( function() {
        $( document.body ).on( 'click', '.checkAll_{{$key}}', function() {
            if ($(this).prop('checked')==true){ 
                $('.{{$chk_class}}').prop('checked',true);
            }else{
                $('.{{$chk_class}}').prop('checked', false);
            }
            $( this ).next().text( $( this ).is( ':checked' ) ? 'Uncheck All' : 'Check All' );
        });

        $( document.body ).on( 'click', '.{{$chk_class}}', function() {
            if($( '.{{$chk_class}}' ).length == $( '.{{$chk_class}}:checked' ).length){
                $('.checkAll_{{$key}}').prop('checked', true);
            }else{
                $('.checkAll_{{$key}}').prop('checked', false);
            }
            $( '.checkAll_{{$key}}' ).next().text( $( '.checkAll_{{$key}}' ).is( ':checked' ) ? 'Uncheck All' : 'Check All' );
        });
    });
</script>
@endpush