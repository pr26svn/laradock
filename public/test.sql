SELECT DISTINCT goods.id, goods.name
From goods INNER JOIN goods_tags on (goods.id=goods_tags.goods_id)
INNER JOIN tags ON (tags.tag_id=goods_tags.goods_id)
