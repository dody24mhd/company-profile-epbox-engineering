<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audit;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('manage-admins');
        $q = Audit::query()->with('user');
        if ($request->filled('from')) $q->whereDate('created_at','>=',$request->from);
        if ($request->filled('to')) $q->whereDate('created_at','<=',$request->to);
        if ($request->filled('entity_type')) $q->where('entity_type',$request->entity_type);
        if ($request->filled('action')) $q->where('action',$request->action);
        $audits = $q->latest()->paginate(20)->withQueryString();
        return view('admin.audits.index', compact('audits'));
    }

    public function exportCsv(Request $request)
    {
        $this->authorize('manage-admins');
        $q = Audit::query()->with('user');
        if ($request->filled('from')) $q->whereDate('created_at','>=',$request->from);
        if ($request->filled('to')) $q->whereDate('created_at','<=',$request->to);
        if ($request->filled('entity_type')) $q->where('entity_type',$request->entity_type);
        if ($request->filled('action')) $q->where('action',$request->action);
        $rows = $q->latest()->get();

        $filename = 'audits_'.now()->format('Ymd_His').'.csv';
        $headers = ['Content-Type'=>'text/csv','Content-Disposition'=>"attachment; filename=$filename"];
        $callback = function() use ($rows){
            $h=fopen('php://output','w');
            fputcsv($h,['Time','User','Action','Entity','Entity ID','Description','IP']);
            foreach($rows as $r){
                fputcsv($h,[
                    $r->created_at,
                    optional($r->user)->name ?? 'system',
                    $r->action,
                    $r->entity_type,
                    $r->entity_id,
                    $r->description,
                    $r->ip_address,
                ]);
            }
            fclose($h);
        };
        return response()->stream($callback,200,$headers);
    }
}


