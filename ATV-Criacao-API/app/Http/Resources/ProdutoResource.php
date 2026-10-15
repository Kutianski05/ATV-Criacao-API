<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nome'=>$this->nome,
            'descricao'=>$this->descricao,
            'preco'=> (float) $this->preco,
            'preco_formatado' => 'R$ ' . number_format((float) $this->preco, 2, ',', '.'),
            'quantidade'=> $this->quantidade,
            'em_estoque' => $this->quantidade > 0,
            'criado_em' => $this->created_at?->format('d/m/Y H:i'),
            'atualizado_em' => $this->updated_at?->format('d/m/Y H:i'),
        ];
    }
}