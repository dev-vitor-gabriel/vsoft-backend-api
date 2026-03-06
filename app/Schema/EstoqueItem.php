<?php

namespace App\Schema;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="EstoqueItem",
 *     type="object",
 *     @OA\Property(property="id_estoque_item_eti", type="integer"),
 *     @OA\Property(
 *         property="id_material_eti",
 *         type="integer",
 *         description="Chave estrangeira referenciando o material"
 *     ),
 *     @OA\Property(
 *         property="id_empresa_eti",
 *         type="integer",
 *         description="Chave estrangeira referenciando a empresa"
 *     ),
 *     @OA\Property(
 *         property="id_estoque_eti",
 *         type="integer",
 *         description="Chave estrangeira referenciando o estoque"
 *     ),
 *     @OA\Property(
 *         property="des_estoque_item_eti",
 *         type="string",
 *         nullable=true,
 *         description="Descrição do item no estoque"
 *     ),
 *     @OA\Property(
 *         property="qtd_estoque_item_eti",
 *         type="number",
 *         format="float",
 *         description="Quantidade do item no estoque"
 *     ),
 *     @OA\Property(
 *         property="is_ativo_eti",
 *         type="boolean",
 *         example=true
 *     ),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class EstoqueItem
{
}
