<div class="form-group">
    <label for="nama_produk">Nama produk</label>
    <input id="nama_produk" name="nama_produk" type="text" value="{{ old('nama_produk', $produk->nama_produk ?? '') }}"
        class="form-control @error('nama_produk') is-invalid @enderror">
    @error('nama_produk')
        <small class="error">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="stok">stok</label>
    <input id="stok" name="stok" type="number" min="0" value="{{ old('stok', $produk->stok ?? '') }}"
        class="form-control @error('stok') is-invalid @enderror">
    @error('stok')
        <small class="error">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea id="deskripsi" name="deskripsi" rows="5" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $produk->deskripsi ?? '') }}</textarea>
    @error('deskripsi')
        <small class="error">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="harga">Harga</label>
    <input id="harga" name="harga" type="number" min="0" value="{{ old('harga', $produk->harga ?? '') }}"
        class="form-control @error('harga') is-invalid @enderror">
    @error('harga')
        <small class="error">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="gambar">File gambar (opsional)</label>

    <input id="gambar" name="gambar" type="file" accept="image/jpeg,image/png,image/webp"
        class="form-control @error('gambar') is-invalid @enderror">
    {{-- <input id="gambar' type="text" name="gambar" value="{{ old('gambar', $produk->gambar ?? '') }}"
        placeholder="Contoh: kopi.jpg"> --}}

    @error('gambar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-actions">
    <button class="btn" type="submit">{{ $tombol }}</button>
    <a class="btn btn-secondary" href="{{ route('produk.index') }}">
        Batal
    </a>
</div>
