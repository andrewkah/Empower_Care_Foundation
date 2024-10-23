SELECT 
					aci.id, 
					aci.status AS countItemStatus,
					aci.remarks,
					ab.barcode_id, 
					ab.asset_id AS assetbarcode_assetId,
					a.assetName,
					asst.name AS assetTypeName,
					ac.id AS assetCountId, 
					ac.branchId, 
					ac.status AS assetCountStatus, 
					ac.countDate,
					b.barcode_value
				FROM 
					assetcountitems aci
				INNER JOIN 
					assetbarcodes ab ON aci.assetId = ab.asset_id
				INNER JOIN 
					assets a ON aci.assetId = a.id
				INNER JOIN 
					assetcounts ac ON aci.assetCountId = ac.id
				INNER JOIN assettyps asst ON asst.id = a.assettypeId 
				INNER JOIN 
					barcodes b ON ab.barcode_id = b.id