<x-layouts.app>
    <x-slot name="header">
      <h2>Update Asset</h2>
    </x-slot>
  
    <x-livewire-assetupdate :asset="$asset" />

</x-layouts.app>
  

    <form wire:submit.prevent="update">
      <input type="text" name="nama_barang" wire:model="asset.nama_barang" placeholder="Nama Barang">
      <input type="number" name="harga_barang" wire:model="asset.harga_barang" placeholder="Harga Barang">
      <input type="text" name="nomor_seri_barang" wire:model="asset.nomor_seri_barang" placeholder="Nomor Seri Barang">
      <input type="number" name="jumlah_barang" wire:model="asset.jumlah_barang" placeholder="Jumlah Barang">
  
      <button type="submit">Update</button>
    </form>