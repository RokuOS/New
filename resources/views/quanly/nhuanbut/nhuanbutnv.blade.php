@extends('quanly.index')
@section('title', 'Nhuận Bút Của Bạn')
@section('content')
<div class="p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-6">Nhuận Bút Của Bạn</h2>
    <table class="min-w-full bg-gray-100 text-left border border-gray-200 rounded-lg">
        <thead>
            <tr class="bg-gray-800 text-white">
                <th class="px-4 py-2">Mã Bản Tin</th>
                <th class="px-4 py-2">Tiêu Đề Bài Tin</th>
                <th class="px-4 py-2">Nhuận Bút Phóng Viên</th>
                <th class="px-4 py-2">Nhuận Bút Biên Tập Viên</th>
                <th class="px-4 py-2">Ngày Thanh Toán</th>
                <th class="px-4 py-2">Tình Trạng Thanh Toán</th>
            </tr>
        </thead>
        <tbody>
            @if($nhuanbuts->isEmpty())
                <tr>
                    <td colspan="6" class="border px-4 py-2 text-center">Không có bản tin nào cho nhân viên này.</td>
                </tr>
            @else
                @foreach($nhuanbuts as $nhuanBut)
                <tr class="hover:bg-gray-200 transition duration-200">
                    <td class="border px-4 py-2">{{ $nhuanBut->MaBT_XB }}</td>
                    <td class="border px-4 py-2">{{ $nhuanBut->TieuDeBT_XB }}</td>
                    <td class="border px-4 py-2">
                        @if($nhanvien->MaNV === $nhuanBut->Ma_PV)
                            {{ $nhuanBut->NhuanButPV ? number_format($nhuanBut->NhuanButPV) . ' VND' : 'Không có' }}
                        @else
                            Không có
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        @if($nhanvien->MaNV === $nhuanBut->Ma_BT)
                            {{ $nhuanBut->NhuanButBTV ? number_format($nhuanBut->NhuanButBTV) . ' VND' : 'Không có' }}
                        @else
                            Không có
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $nhuanBut->NgayThanhToan ?? 'Chưa Thanh Toán' }}</td>
                    <td class="border px-4 py-2">{{ $nhuanBut->TinhTrangThanhToan ?? 'Chưa Thanh Toán' }}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="mt-4">
        {{ $nhuanbuts->links() }} <!-- Hiển thị các liên kết phân trang -->
    </div>
</div>
@endsection
