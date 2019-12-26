<?php
// 公钥私钥加解密
define('RSA_PUBLIC','-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCaFEaVjdZwMq0j1X/dL0WlLsSB
YYsEzU242EDIfqIs3T2zvnVqqAw59zgYbqjw6/urBCNm+7mwkYeHtWKck55gN1k8
ZAqBElyWwFRs9zBwQoNazBwTIEx6SnY/c7q54AI+nJLosXRXGDYt+jylvrT1DhWK
vsMQE57yMSVC6vfSlwIDAQAB
-----END PUBLIC KEY-----');

define('RSA_PRIVATE', '-----BEGIN PRIVATE KEY-----
MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAJoURpWN1nAyrSPV
f90vRaUuxIFhiwTNTbjYQMh+oizdPbO+dWqoDDn3OBhuqPDr+6sEI2b7ubCRh4e1
YpyTnmA3WTxkCoESXJbAVGz3MHBCg1rMHBMgTHpKdj9zurngAj6ckuixdFcYNi36
PKW+tPUOFYq+wxATnvIxJULq99KXAgMBAAECgYBx5T0L/k4eoAdGruKW4QPNiBWw
QieehBjI4+p3isxc96pNvSNUlSZ8jtfDj8GIXhiqISP+U2O/NsSFt7pOXfy6o2+x
BxHsUc1qNQbjKgbjm17Bt4eqIynrjilDxMhWNpWjU4NB9LfNmW+YRaoz4SgPA7k5
buA7UE+B2w1byFjhIQJBAMbo7RKYOfNiggpvcNOptGMzLO61ZjBU9OXzhiRxPr7e
2XQPgrnTNtYddgmwxyL3G4sr/WVzHXcloS7BHISqfwcCQQDGTWC8kiPtwS8wIv2K
IdIaKGCE4DDV4hAVxl5+JIseyvT0ewUohCEPZcVkZzAk1Wlg9uTvs4Dz5Ms3pqYn
y5vxAkEAsggU+QmrBL5sqi5oi+pe/FL3qohN+IBx2ceHjuKVSH1poEmptezoLeic
l7vT4OXPj1dGLCFGhDf39kL95Xg8zQJAUmFu4KftmSX6TosavTnTqN5BSrJAV3p0
qDciplDUItS58p7ww6Ywfc8Ps+hSTdsCzi+DaDkwRyIzckkfGcUyYQJAZ4c25Ny1
lAclEywkDa0bREvrIy+6SMy0JDHfeHOawy3K0ZrOX+fQ/q3nzzTRNahcnUAa8bJ4
l02qXy7MLbNSMw==
-----END PRIVATE KEY-----');
class RSA{
	public static function entype($data){
		$public_key = openssl_pkey_get_public(RSA_PUBLIC); 
		if(!$public_key){
		    die('公钥不可用');
		}
		$return_en = openssl_public_encrypt($data, $crypted, $public_key);
		if(!$return_en){
		    return('加密失败,请检查RSA秘钥');
		}
		$eb64_cry = base64_encode($crypted);
		return $eb64_cry;
	}


	public static function detype($data){
		$private_key = openssl_pkey_get_private(RSA_PRIVATE);
		if(!$private_key){
		    die('私钥不可用');
		}
		$return_de = openssl_private_decrypt(base64_decode($data), $decrypted, $private_key);
		if(!$return_de){
		    return('解密失败,请检查RSA秘钥');
		}
		return $decrypted;
	}
}

$res = RSA::entype('this is tata ');
echo "<pre>";
print_r($res);

echo "<hr>";

$ret = RSA::detype($res);
print_r($ret);