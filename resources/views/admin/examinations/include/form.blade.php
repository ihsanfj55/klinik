<div class="col-6">
    <label for="visit_to" class="form-label">Kunjungan ke</label>
    <input type="text" class="form-control @error('visit_to') is-invalid @enderror" name="visit_to"
        value="{{ isset($examination) ? $examination->visit_to : old('visit_to') }}">
    @error('visit_to')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-6">
    <label for="queue_number" class="form-label">Nomor Antrian</label>
    <input type="text" class="form-control @error('queue_number') is-invalid @enderror" name="queue_number"
        value="{{ isset($examination) ? $examination->queue_number : old('queue_number') }}">
    @error('queue_number')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="fullname" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname"
        value="{{ isset($examination) ? $examination->fullname : old('fullname') }}">
    @error('fullname')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="age" class="form-label">Umur</label>
    <input type="text" class="form-control @error('age') is-invalid @enderror" name="age"
        value="{{ isset($examination) ? $examination->age : old('age') }}">
    @error('age')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-4">
    <label for="village" class="form-label">Desa</label>
    <input type="text" class="form-control @error('village') is-invalid @enderror" name="village"
        value="{{ isset($examination) ? $examination->village : old('village') }}">
    @error('village')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-4">
    <label for="subdistrict" class="form-label">Kecamatan</label>
    <input type="text" class="form-control @error('subdistrict') is-invalid @enderror" name="subdistrict"
        value="{{ isset($examination) ? $examination->subdistrict : old('subdistrict') }}">
    @error('subdistrict')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-4">
    <label for="regency" class="form-label">Kabupaten</label>
    <input type="text" class="form-control @error('regency') is-invalid @enderror" name="regency"
        value="{{ isset($examination) ? $examination->regency : old('regency') }}">
    @error('regency')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-12">
    <label for="anamnese" class="form-label">Anamnese</label>
    <textarea type="text" class="form-control  @error('anamnese') is-invalid @enderror" name="anamnese"
        style="height: 100px;">{{ isset($examination) ? $examination->anamnese : old('anamnese') }}</textarea>
    @error('anamnese')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12">
    <label for="checkup_result" class="form-label">Hasil Pemeriksaan</label>
    <textarea type="text" class="form-control @error('checkup_result') is-invalid @enderror" name="checkup_result"
        style="height: 100px;">{{ isset($examination) ? $examination->checkup_result : old('checkup_result') }}</textarea>
    @error('checkup_result')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12">
    <label for="therapy" class="form-label">Therapi</label>
    <textarea type="text" class="form-control @error('therapy') is-invalid @enderror" name="therapy"
        style="height: 100px;">{{ isset($examination) ? $examination->therapy : old('therapy') }}</textarea>
    @error('therapy')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-12">
    <label for="action" class="form-label">Tindakan</label>
    <textarea type="text" class="form-control @error('action') is-invalid @enderror" name="action"
        style="height: 100px;">{{ isset($examination) ? $examination->action : old('action') }}</textarea>
    @error('action')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <label for="examiner" class="form-label">Pemeriksa</label>
    <textarea type="text" class="form-control @error('examiner') is-invalid @enderror" name="examiner"
        style="height: 100px;">{{ isset($examination) ? $examination->examiner : old('examiner') }}</textarea>
    @error('examiner')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
