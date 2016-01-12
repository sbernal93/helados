<?php


namespace AppBundle\Model;


class ConstantsTableInfo
{

    /**
     * ################################################################################################################
     *                                          Detalle
     * ################################################################################################################
     */

    const DETALLE = 'detalle';
    const DE_ID = 'de_id';
    const DE_CANTIDAD = 'de_cantidad';
    const FK_FACTURA = 'fk_factura';

    /**
     * ################################################################################################################
     *                                          Detalle Bolas
     * ################################################################################################################
     */

    const DETALLE_BOLAS = 'detalle_bolas';
    const DB_ID = 'db_id';
    const DB_CANTIDAD = 'db_cantidad';
    const FK_DETALLE = 'fk_detalle';
    const FK_INVENTARIO_SUCURSAL = 'fk_inventario_sucursal';

    /**
     * ################################################################################################################
     *                                          Detalle Inventario
     * ################################################################################################################
     */

    const DETALLE_INVENTARIO = 'detalle_inventario';
    const DIN_ID = 'din_id';
    const DIN_UNIDAD = 'din_unidad';
    //const FK_DETALLE = 'fk_detalle';
    //const FK_INVENTARIO_SUCURSAL = 'fk_inventario_sucursal';

    /**
     * ################################################################################################################
     *                                          Detalle Pedido
     * ################################################################################################################
     */

    const DETALLE_PEDIDO = 'detalle_pedido';
    const DP_ID = 'dp_id';
    const DP_CANTIDAD = 'dp_cantidad';
    const FK_PEDIDO = 'fk_pedido';
    const FK_PRES_X_PAIS = 'fk_pres_x_pais';

    /**
     * ################################################################################################################
     *                                          Director
     * ################################################################################################################
     */

    const DIRECTOR = 'director';
    const DI_CEDULA = 'di_cedula';
    const DI_NOMBRE = 'di_nombre';
    const DI_APELLIDO = 'di_apellido';
    const DI_CORREO = 'di_correo';
    const DI_SEG_NON = 'di_seg_nom';
    const DI_SEG_APE = 'di_seg_ape';
    const DI_FECHA_ING = 'di_fecha_ing';
    const DI_PAIS_NACIM = 'di_pais_nacim';
    const FK_LUGAR = 'fk_lugar';

    /**
     * ################################################################################################################
     *                                          Factura
     * ################################################################################################################
     */

    const FACTURA = 'factura';
    const FA_ID = 'fa_id';
    const FA_FECHA_VENTA = 'fa_fecha_venta';
    const FA_TOTAL = 'fa_total';
    const FK_SUCURSAL = 'fk_sucursal';

    /**
     * ################################################################################################################
     *                                          Favorito
     * ################################################################################################################
     */

    const FAVORITO = 'favorito';
    const FAV_ID = 'fav_id';
    const FK_DIRECTOR = 'fk_director';
    const FK_SABOR_BJ = 'fk_sabor_bj';

    /**
     * ################################################################################################################
     *                                          Hist Precio
     * ################################################################################################################
     */

    const HIST_PRECIO = 'hist_precio';
    const HP_ID = 'hp_id';
    const HP_FECHA_INI = 'hp_fecha_ini';
    const HP_FECHA_FIN = 'hp_fecha_fin';
    const HP_PRECIO = 'hp_precio';
    const FK_PRESENTACION = "fk_presentacion";

    /**
     * ################################################################################################################
     *                                          historia
     * ################################################################################################################
     */

    const HISTORIA = 'historia';
    const HI_ID = 'hi_id';
    const HI_EVENTO = 'hi_evento';
    const HI_FECHA = 'hi_fecha';

    /**
     * ################################################################################################################
     *                                          Horario
     * ################################################################################################################
     */

    const HORARIO = 'horario';
    const HO_ID = 'ho_id';
    const HO_HORA_INI = 'ho_hora_ini';
    const HO_HORA_FIN = 'ho_hora_fin';
    const HO_DIA = 'ho_dia';
    //const FK_SUCURSAL = 'fk_sucursal';

    /**
     * ################################################################################################################
     *                                          Info Nutr
     * ################################################################################################################
     */

    const INFO_NUTR = 'info_nutr';
    const IN_ID = 'in_id';
    const IN_CARACT = 'in_caract';
    const IN_UNIDAD = 'in_unidad';
    const IN_PORCENT = 'in_porcent';

    /**
     * ################################################################################################################
     *                                          Ingrediente
     * ################################################################################################################
     */

    const INGREDIENTE = 'ingrediente';
    const ING_ID = 'ing_id';
    const ING_NOMBRE = 'ing_nombre';
    const ING_DESCRIPCION = 'ing_descripcion';

    /**
     * ################################################################################################################
     *                                          Inventario Sucursal
     * ################################################################################################################
     */

    const INVENTARIO_SUCURSAL ='inventario_sucursal';
    const IS_LOTE = 'is_lote';
    const IS_FECHA_ELAB = 'is_fecha_elab';
    const IS_FECHA_VENC = 'is_fecha_venc';
    const IS_CANTIDAD = 'is_cantidad';
    const FK_DETALLE_PEDIDO = 'fk_detalle_pedido';

    /**
     * ################################################################################################################
     *                                          Lugar
     * ################################################################################################################
     */

    const LUGAR = 'lugar';
    const LU_ID = 'lu_id';
    const LU_NOMBRE = 'lu_nombre';
    const LU_TIPO = 'lu_tipo';
    const LU_UNION_EU = 'lu_union_eu';
    const LU_TEMPORADA = 'lu_temporada';
    //const FK_LUGAR = 'fk_lugar';

    /**
     * ################################################################################################################
     *                                          Menu
     * ################################################################################################################
     */

    const MENU = 'menu';
    const ME_ID = 'me_id';
    const ME_PRECIO = 'me_precio';
    const FK_PRODUCTO = 'fk_producto';
    //const FK_LUGAR = 'fk_lugar';

    /**
     * ################################################################################################################
     *                                          Pedido
     * ################################################################################################################
     */

    const PEDIDO = 'pedido';
    const PE_NUM_ORDEN = 'pe_num_orden';
    const PE_FECHA_SOLIC = 'pe_fecha_solic';
    const PE_FECHA_RECEP = 'pe_fecha_recep';
    //const FK_SUCURSAL = 'fk_sucursal';

    /**
     * ################################################################################################################
     *                                          Pres X Pais
     * ################################################################################################################
     */

    const PRES_X_PAIS = 'pres_x_pais';
    const PXP_ID = 'pxp_id';
    const PXP_FECHA_INI = 'pxp_fecha_ini';
    const PXP_FECHA_FIN = 'pxp_fecha_fin';
    //const FK_PRES_X_PAIS = 'fk_pres_x_pais';
    const FK_PXP_PRES = 'fk_pxp_pres';

    /**
     * ################################################################################################################
     *                                          Presentacion
     * ################################################################################################################
     */

    const PRESENTACION = 'presentacion';
    const PRE_ID = 'pre_id';
    const PRE_UNIDAD_MEDIDA = 'pre_unidad_medida';
    const PRE_TIPO =  'pre_tipo';
    const PRE_CANTIDAD = 'pre_cantidad';

    /**
     * ################################################################################################################
     *                                          Producto
     * ################################################################################################################
     */

    const PRODUCTO = 'producto';
    const PRO_ID = 'pro_id';
    const PRO_TIPO = 'pro_tipo';
    const PRO_DESCRIPCION = 'pro_descripcion';
    const PRO_CANT_BOL = 'pro_cant_bol';
    const PRO_NOMBRE = 'pro_nombre';

    /**
     * ################################################################################################################
     *                                          Producto Promocion
     * ################################################################################################################
     */

    const PRODUCTO_PROMOCION = 'producto_promocion';
    const PRP_ID = 'prp_id';
    const PRP_FECHA_INI = 'prp_fecha_ini';
    const PRP_FECHA_FIN = 'prp_fecha_fin';
    const FK_PROMOCION = 'fk_promocion';
    //const FK_PRODUCTO = 'fk_producto';

    /**
     * ################################################################################################################
     *                                          Promocion Pais
     * ################################################################################################################
     */

    const PROMO_PAIS = 'promo_pais';
    const PP_ID = 'pp_id';
    const PP_FECHA_INI = 'pp_fecha_ini';
    const PP_FECHA_FIN = 'pp_fecha_fin';
    //const FK_PROMOCION = 'fk_promocion';
    //const FK_LUGAR = 'fk_lugar';
    /**
     * ################################################################################################################
     *                                          Promocion
     * ################################################################################################################
     */

    const PROMOCION = 'promocion';
    const PR_ID = 'pr_id';
    const PR_PORC_DESC = 'pr_porc_desc';
    const PR_DESCRIPCION = 'pr_descripcion';

    /**
     * ################################################################################################################
     *                                          Retiro
     * ################################################################################################################
     */

    const RETIRO = 'retiro';
    const RE_ID = 're_id';
    const RE_FECHA = 're_fecha';
    const RE_CANTIDAD = 're_cantidad';
    const RE_UNIDAD = 're_unidad';
    //const FK_INVENTARIO_SUCURSAL = 'fk_inventario_sucursal';
    /**
     * ################################################################################################################
     *                                          Sabor Bj
     * ################################################################################################################
     */

    const SABOR_BJ = 'sabor_bj';
    const SA_ID = 'sa_id';
    const SA_NOMBRE = 'sa_nombre';
    const SA_DESCRIPCION = 'sa_descripcion';
    const SA_TIPO = 'sa_tipo';

    /**
     * ################################################################################################################
     *                                          Sabor Info Nut
     * ################################################################################################################
     */

    const SABOR_INFO_NUT = 'sabor_info_nut';
    const SUN_ID = 'sun_id';
    const SUN_VALOR = 'sun_valor';
    const FK_INFO_NUT = 'fk_info_nut';
    //const FK_SABOR_BJ = 'fk_sabor_bj';

    /**
     * ################################################################################################################
     *                                          Sabor Ingrediente
     * ################################################################################################################
     */

    const SABOR_INGREDIENTE = 'sabor_ingrediente';
    const SI_ID = 'si_id';
    const SI_PORCION = 'si_porcion';
    const FK_INGREDIENTE = 'fk_ingrediente';
    //const FK_SABOR_BJ = 'fk_sabor_bj';
    /**
     * ################################################################################################################
     *                                          Sucursal
     * ################################################################################################################
     */

    const SUCURSAL = 'sucursal';
    const SU_ID = 'su_id';
    const SU_NOMBRE = 'su_nombre';
    const SU_COD_POST = 'su_cod_post';
    const SU_FECHA_APERT = 'su_fecha_apert';
    const SU_URBANIZACION = 'su_urbanizacion';
    const SU_CALLE = 'su_calle';
    const SU_EDIFICIO = 'su_edificio';
    const SU_REF_DIR = 'su_ref_dir';
    //const FK_LUGAR = '';
    /**
     * ################################################################################################################
     *                                          Telefono
     * ################################################################################################################
     */
    const TELEFONO = 'telefono';
    const TE_ID = 'te_id';
    const TE_NUMERO = 'te_numero';
    //const FK_SUCURSAL = 'fk_sucursal';
    //const FK_DIRECTOR = 'fk_director';
}
