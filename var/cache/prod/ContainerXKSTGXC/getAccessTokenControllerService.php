<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC1zyh2QM2EIPez'."\n".'QKYZEYVyA6O79aWdmoq2pGDneT5+aFzGx73ZbPL0rclQMri4Rk0lMJCy6+e31u0g'."\n".'G5zZeSjmFIAY0+B4TlmKJg2UPgDQcikcdx3K/Z93CEb/y1POpTIH3GtD9PXAeOfG'."\n".'d88KRZDsGV5GdRRXrnXthUgxesAJTgb52GOOQ3lyhioOrMguouu1wRYVGDxeoAdx'."\n".'SigpQpP+tJa78ony16dliokcdst8CAq7yFLEoJk4i85Nz/JTJOHJnJATMh4WyeiG'."\n".'p5eQjO4kavYsPQULzM6tr+x/3nW6f+qngX2ZCuKwLXMYacvWd5yXuJqYTS+fAvoL'."\n".'qtvKLi9fAgMBAAECggEBAJvMf07+71735WxNzUiUNDflGI28zwTE53PmX0hdJQms'."\n".'Iz0Q9Ab7jyPQPUClhpgbXoatHILHF9X5r1CheQMACeVI0hD0mFpgQejZ/S75BzeZ'."\n".'bNOA3B4Uw298v2L6ecIO3FXSNHWS2Hns4im4h8q0nKFGh/x23kzZKyO04I3OM/yD'."\n".'17RXJpQOyOnTD0w3W+7PhfjodqY19H9xGmGhDC2rmF7IkF6H2Ii7EDhXOQTcJYkm'."\n".'zKkyfLGrVFDj2h9BR60Q6fca0EaMzGCGayBDl4OsLL13XZFqKty+1q1pq33Zztfa'."\n".'saLwQpeYbt0WjFVsux+iG5SyxWV1E5+kFuV4vCt+Z1ECgYEA4++LUCf+TNSf2kn1'."\n".'fgv8BJQnmZ5xSumLSQFlnMgtU3Ue8fRrt/PLz8EbjTZmhE97/aPeKZZZIg0QHD+G'."\n".'sQU5GJchVhSMwFxEV7tNmiHrZl3SF3hFPqPzp/wYRJeNnH0OS30l8J4sXm+JagOL'."\n".'2KXqgZP82xg1ecs0sZuRAqnyGvkCgYEAzDG43L1cIVBeBGUxfQq8ps+z5i1S/UQi'."\n".'tPPShY8924J0pAW0rBPX2a/p90WISH/GpjUfrj35LlFW3BLt42yT37vD8G5K6mf2'."\n".'WpHp0wZdhK/WQuMHeiiy11BdyKpwlJoxs+OnaGxAuT2aYQepRqohNq4QCkYooowE'."\n".'n/WvL10hmxcCgYAnoMP1wZ5CuUy5ZNZbfbXpDeD8okFMJuJiZO3Hnj3THq+snTQF'."\n".'HUu36PjjSiv0oOULqeu8Czmf4+mDH8BJEoFktxHCp3v5DZGMNzI8s9z7RSB7mBth'."\n".'0ptP/1IwyrCCHnPXyABKnxVTrcyUM92iYuYsdRAm/0R80kls/4Dsl6NR8QKBgQCx'."\n".'YvyKXsI7eprCTLqKOxqZ+1P4QSWYOWnBMxOOzVpaaGE14HMNDgv043poQnJbMQ18'."\n".'dCf6cYIX97dyZctdR4TK104nf1j7e6crFRlBJoV1cF+9KYbkW5jJrdpbKZ21qqJE'."\n".'+R8Eew5bHiYP5tzqM3+5BcuPcVV5qBOYdpFinxBDrwKBgEXk05fzoiv1XDcF+Zzr'."\n".'6c9wjUT7vbgt1TiGZng1XtGrUJWjKVYJ40j+itjaOj6S/I68qRgU38pnAp0x4vX9'."\n".'AdFLq0ZL4sk39yhrN5V6HR324axbSQO5aA5K9GSUGoe2OjtlBFvI751/S44TWnMx'."\n".'C2lIHtHEF9xUobTtfBNQT7WQ'."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000e53cd85b03acc1620861b4eac41206a7fc9534c24b3b41aaba9fc2d5f80728b4265d0571294b44802f9bd6dc2acbe1da9c812523300b1866bf13a02ad17459ea');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
