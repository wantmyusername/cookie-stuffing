# Cookie Stuffing — Artefacto de fraude publicitario

> **AVISO.** Este repositorio es un ejemplo de **cookie stuffing**, una técnica de **fraude publicitario / de afiliados**. **No debe usarse.** Se conserva únicamente como **referencia** de cómo funciona el abuso y para poder reconocerlo. Este documento es **explicativo**: no incluye instrucciones de uso.

---

## Qué es el "cookie stuffing"

Es una técnica de **fraude** en la que se **planta una cookie de seguimiento/atribución** en el navegador de un usuario **sin su conocimiento ni consentimiento**, normalmente al cargar un recurso aparentemente inofensivo (una imagen, un píxel, un iframe). Así, el defraudador se **atribuye conversiones o comisiones** que nunca generó, robándoselas a afiliados legítimos o a la red de anuncios.

Es fraude: **viola las políticas** de redes de afiliados y de anuncios, **atenta contra la privacidad** del usuario (GDPR/ePrivacy) y en muchos países **es ilegal**.

## Qué hace este código (a grandes rasgos)

| Archivo | Rol |
|---|---|
| `.htaccess` | Reescribe la URL **`thumb/kYnIzOi.png`** (que parece una imagen) hacia `firmaP.php`. |
| `kYnIzOi.png` | El **señuelo**: la imagen que el usuario cree estar cargando. |
| `firmaP.php` | **El núcleo del stuffing.** Si el `Referer` contiene `poringa`, marca la sesión; si además **no existe** la cookie `la_cookie`, la **fija** y redirige a `plug.php`. Si la cookie ya existe (o el referer no coincide), redirige a la **imagen real** para que el usuario no note nada. |
| `plug.php` / `thumb/plug.php` | Detectan móvil por `User-Agent` y redirigen a dominios de **anuncios/popups** (`prpops.com`, `prmobiles.com/imagenclick.com`, …). |
| `index.php` / `thumb/index.php` | Redirecciones triviales. |

En conjunto: se disfraza un recurso como imagen, se **coloca una cookie a usuarios que vienen de un foro concreto** (sin avisarles) y se les redirige a redes de anuncios.

## Por qué es fraude (y por qué no usarlo)

- **Coloca cookies sin consentimiento** → viola la privacidad del usuario y la normativa (GDPR/ePrivacy).
- **Roba atribución/comisiones** a afiliados y anunciantes legítimos.
- **Redirige a dominios de ads/popups** potencialmente maliciosos (malvertising).
- **Viola los términos de servicio** de AdSense, redes de afiliados y la mayoría de hostings.
- **Puede ser ilegal** según la jurisdicción.

## Estado

- **Artefacto histórico.** No está mantenido y **no debe usarse**.
- Los dominios referenciados (`img4fun.com`, `prpops.com`, `prmopops.com`, `prmobiles.com/imagenclick.com`, `poringa`) pertenecen a **terceros** y no forman parte de este repositorio.
- Se conserva solo como **referencia** de la técnica.

## Licencia

Sin licencia. Contenido conservado únicamente con fines de referencia/educativos.
