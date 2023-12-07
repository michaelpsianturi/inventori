<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="#" method="get">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan kata kunci" wire:model="keyword">
                        </div>

                        <select class="form-control" wire:model="kategori">
                            <option value="">Semua Kategori</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->product_name }}">{{ $category->product_name }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assets as $asset)
                                <tr>
                                    <td>{{ $asset->nama }}</td>
                                    <td>{{ $asset->kode }}</td>
                                    <td>{{ $asset->unit }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
