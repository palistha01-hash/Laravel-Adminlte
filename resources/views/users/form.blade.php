<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="FullName">FullName</label>

            {!! Form::text('FullName', null, [
                'class' => "form-control",
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('FullName') }}",
            ]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="FullNameNp">FullNameNp</label>
            {!! Form::text('FullNameNp', null, [
                'class' => "form-control",
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('FullNameNp') }}",
            ]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="DateOfBirth">DateOfBirth</label>

            {!! Form::text('DateOfBirth', null, [
                'class' => "form-control",
                'id' => 'DateOfBirth',
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('DateOfBirth') }}",
            ]) !!}
            {!! Form::hidden('DateOfBirthAd', null, [
                'class' => "form-control",
                'id' => 'DateOfBirthAd',
            ]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="GenderId">Gender</label>
            {!! Form::text('GenderId', null, [
                'class' => "form-control",
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('GenderId') }}",
            ]) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="Mobile">Mobile</label>

            {!! Form::text('Mobile', null, [
                'class' => "form-control",
                'id' => 'Mobile',
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('Mobile') }}",
            ]) !!}
          
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="Phone">Phone</label>
            {!! Form::text('Phone', null, [
                'class' => "form-control",
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('Phone') }}",
            ]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="Address">Address</label>

            {!! Form::text('Address', null, [
                'class' => "form-control",
                'id' => 'Address',
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('Address') }}",
            ]) !!}
          
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="ProvinceId">Province</label>
            {!! Form::text('ProvinceId', null, [
                'class' => "form-control",
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('ProvinceId') }}",
            ]) !!}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="ZoneId">Zone</label>

            {!! Form::text('ZoneId', null, [
                'class' => "form-control",
                'id' => 'ZoneId',
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('ZoneId') }}",
            ]) !!}
         
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="DistrictId">District</label>
            {!! Form::text('DistrictId', null, [
                'class' => "form-control",
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('DistrictId') }}",
            ]) !!}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="Email">Email</label>

            {!! Form::text('Email', null, [
                'class' => "form-control",
                'id' => 'Email',
                'placeholder' => '',
                'autofocus' => 'autofocus',
                'value' => "{{ old('Email') }}",
            ]) !!}
        
        </div>
    </div>
   
</div>

