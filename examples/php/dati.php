<?php

/*
 * queste sono delle fatture di prova da inviare a Camera di Compensazione
 */

$elencoFatture = [
    [
        "tipo_fattura" => "v",
        "nome_file" => "ITGZAGPL05B01F646C_77CFB.xml",
        "contenuto" => <<<EOD
            <?xml version="1.0" encoding="UTF-8"?><p:FatturaElettronica xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" versione="FPR12" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 fatturaordinaria_v1.2.xsd "><FatturaElettronicaHeader><DatiTrasmissione><IdTrasmittente><IdPaese>IT</IdPaese><IdCodice>GZAGPL05B01F646C</IdCodice></IdTrasmittente><ProgressivoInvio>2211000007</ProgressivoInvio><FormatoTrasmissione>FPR12</FormatoTrasmissione><CodiceDestinatario>0000000</CodiceDestinatario></DatiTrasmissione><CedentePrestatore><DatiAnagrafici><IdFiscaleIVA><IdPaese>IT</IdPaese><IdCodice>01234567897</IdCodice></IdFiscaleIVA><CodiceFiscale>GZAGPL05B01F646C</CodiceFiscale><Anagrafica><Denominazione>AZIENDA DI PROVA di GAzie</Denominazione></Anagrafica><RegimeFiscale>RF01</RegimeFiscale></DatiAnagrafici><Sede><Indirizzo>Via Volturno, 2</Indirizzo><CAP>65015</CAP><Comune>MONTESILVANO</Comune><Provincia>PE</Provincia><Nazione>IT</Nazione></Sede></CedentePrestatore><CessionarioCommittente><DatiAnagrafici><IdFiscaleIVA><IdPaese>IT</IdPaese><IdCodice>01620430403</IdCodice></IdFiscaleIVA><CodiceFiscale>01620430403</CodiceFiscale><Anagrafica><Denominazione>Super bit srl </Denominazione></Anagrafica></DatiAnagrafici><Sede><Indirizzo>Via Volturno, 2</Indirizzo><CAP>65015</CAP><Comune>Montesilvano</Comune><Provincia>PE</Provincia><Nazione>IT</Nazione></Sede></CessionarioCommittente></FatturaElettronicaHeader><FatturaElettronicaBody><DatiGenerali><DatiGeneraliDocumento><TipoDocumento>TD01</TipoDocumento><Divisa>EUR</Divisa><Data>2022-01-26</Data><Numero>7/1</Numero><ImportoTotaleDocumento>550011.10</ImportoTotaleDocumento></DatiGeneraliDocumento></DatiGenerali><DatiBeniServizi><DettaglioLinee><NumeroLinea>1</NumeroLinea><CodiceArticolo><CodiceTipo>BENE_CAT_1</CodiceTipo><CodiceValore>H1000</CodiceValore></CodiceArticolo><Descrizione>Miele mille fiori 1 kg</Descrizione><Quantita>100000.000</Quantita><UnitaMisura>pz</UnitaMisura><PrezzoUnitario>5.000</PrezzoUnitario><PrezzoTotale>500000.00</PrezzoTotale><AliquotaIVA>10.00</AliquotaIVA></DettaglioLinee><DettaglioLinee><NumeroLinea>2</NumeroLinea><TipoCessionePrestazione>AC</TipoCessionePrestazione><Descrizione>SPESE INCASSO</Descrizione><Quantita>2.00</Quantita><UnitaMisura>N.</UnitaMisura><PrezzoUnitario>4.55</PrezzoUnitario><PrezzoTotale>9.10</PrezzoTotale><AliquotaIVA>22.00</AliquotaIVA></DettaglioLinee><DatiRiepilogo><AliquotaIVA>10.00</AliquotaIVA><ImponibileImporto>500000.00</ImponibileImporto><Imposta>50000.00</Imposta><EsigibilitaIVA>I</EsigibilitaIVA><RiferimentoNormativo>IVA al 10%</RiferimentoNormativo></DatiRiepilogo><DatiRiepilogo><AliquotaIVA>22.00</AliquotaIVA><SpeseAccessorie>9.10</SpeseAccessorie><ImponibileImporto>9.10</ImponibileImporto><Imposta>2.00</Imposta><EsigibilitaIVA>I</EsigibilitaIVA><RiferimentoNormativo>IVA al 22%</RiferimentoNormativo></DatiRiepilogo></DatiBeniServizi><DatiPagamento><CondizioniPagamento>TP01</CondizioniPagamento><DettaglioPagamento><Beneficiario>AZIENDA DI PROVA di GAzie</Beneficiario><ModalitaPagamento>MP12</ModalitaPagamento><DataScadenzaPagamento>2022-02-28</DataScadenzaPagamento><ImportoPagamento>275005.55</ImportoPagamento><ABI>00000</ABI><CAB>00000</CAB></DettaglioPagamento><DettaglioPagamento><Beneficiario>AZIENDA DI PROVA di GAzie</Beneficiario><ModalitaPagamento>MP12</ModalitaPagamento><DataScadenzaPagamento>2022-03-31</DataScadenzaPagamento><ImportoPagamento>275005.55</ImportoPagamento><ABI>00000</ABI><CAB>00000</CAB></DettaglioPagamento></DatiPagamento></FatturaElettronicaBody></p:FatturaElettronica>
EOD,
        "residuo" => "100.61"
    ],
    [
        "tipo_fattura" => "a",
        "nome_file" => "ITGZAGPL05B01F646C_79HL0.xml",
        "contenuto" => <<<EOD
            <?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="fatturaordinaria_v1.2.1.xsl"?><p:FatturaElettronica xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" versione="FPR12" xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 fatturaordinaria_v1.2.xsd "><FatturaElettronicaHeader><DatiTrasmissione><IdTrasmittente><IdPaese>IT</IdPaese><IdCodice>GZAGPL05B01F646C</IdCodice></IdTrasmittente><ProgressivoInvio>2212000004</ProgressivoInvio><FormatoTrasmissione>FPR12</FormatoTrasmissione><CodiceDestinatario>0000000</CodiceDestinatario></DatiTrasmissione><CedentePrestatore><DatiAnagrafici><IdFiscaleIVA><IdPaese>IT</IdPaese><IdCodice>01234567897</IdCodice></IdFiscaleIVA><CodiceFiscale>GZAGPL05B01F646C</CodiceFiscale><Anagrafica><Denominazione>AZIENDA DI PROVA di GAzie</Denominazione></Anagrafica><RegimeFiscale>RF01</RegimeFiscale></DatiAnagrafici><Sede><Indirizzo>Via Volturno, 2</Indirizzo><CAP>65015</CAP><Comune>MONTESILVANO</Comune><Provincia>PE</Provincia><Nazione>IT</Nazione></Sede></CedentePrestatore><CessionarioCommittente><DatiAnagrafici><IdFiscaleIVA><IdPaese>IT</IdPaese><IdCodice>02403210269</IdCodice></IdFiscaleIVA><CodiceFiscale>02403210269</CodiceFiscale><Anagrafica><Denominazione>Belletti Ugo </Denominazione></Anagrafica></DatiAnagrafici><Sede><Indirizzo>via Terraglio, 78</Indirizzo><CAP>31100</CAP><Comune>Treviso</Comune><Provincia>TV</Provincia><Nazione>IT</Nazione></Sede></CessionarioCommittente></FatturaElettronicaHeader><FatturaElettronicaBody><DatiGenerali><DatiGeneraliDocumento><TipoDocumento>TD01</TipoDocumento><Divisa>EUR</Divisa><Data>2022-01-25</Data><Numero>4/1</Numero><DatiRitenuta><TipoRitenuta>RT01</TipoRitenuta><ImportoRitenuta>300.00</ImportoRitenuta><AliquotaRitenuta>20.00</AliquotaRitenuta><CausalePagamento>A</CausalePagamento></DatiRitenuta><DatiCassaPrevidenziale><TipoCassa>TC22</TipoCassa><AlCassa>4.00</AlCassa><ImportoContributoCassa>60.00</ImportoContributoCassa><ImponibileCassa>1500.00</ImponibileCassa><AliquotaIVA>22.00</AliquotaIVA></DatiCassaPrevidenziale><ImportoTotaleDocumento>1903.20</ImportoTotaleDocumento></DatiGeneraliDocumento></DatiGenerali><DatiBeniServizi><DettaglioLinee><NumeroLinea>1</NumeroLinea><CodiceArticolo><CodiceTipo>SERVIZIO</CodiceTipo><CodiceValore>INSTGAZIE</CodiceValore></CodiceArticolo><Descrizione>    Pacchetto installazione software libero GAzie su server web raggiungibile da tutte le macchine della vostra LAN aziendale. Il servizio comprende 4 ore di avviamento all'utilizzo del programma e la configurazione di base dei dati aziendali.  Installazione e avviamento gestionale GAzie</Descrizione><Quantita>3.000</Quantita><UnitaMisura>n</UnitaMisura><PrezzoUnitario>500.000</PrezzoUnitario><PrezzoTotale>1500.00</PrezzoTotale><AliquotaIVA>22.00</AliquotaIVA><Ritenuta>SI</Ritenuta></DettaglioLinee><DatiRiepilogo><AliquotaIVA>22.00</AliquotaIVA><ImponibileImporto>1560.00</ImponibileImporto><Imposta>343.20</Imposta><EsigibilitaIVA>I</EsigibilitaIVA><RiferimentoNormativo>IVA al 22%</RiferimentoNormativo></DatiRiepilogo></DatiBeniServizi><DatiPagamento><CondizioniPagamento>TP02</CondizioniPagamento><DettaglioPagamento><Beneficiario>AZIENDA DI PROVA di GAzie</Beneficiario><ModalitaPagamento>MP05</ModalitaPagamento><DataScadenzaPagamento>2022-01-25</DataScadenzaPagamento><ImportoPagamento>1603.20</ImportoPagamento><IBAN>IT65Q0000000000000000000021</IBAN></DettaglioPagamento></DatiPagamento></FatturaElettronicaBody></p:FatturaElettronica>
EOD,
        "residuo" => "231.76"
    ]
];

$elencoDatiManuali = [
    [
        "tipo_fattura" => "a",
        "partita_iva_creditore" => "01651210831",
        "partita_iva_debitore" => "IT04507990150",
        "data_fattura" => "2022-03-01",
        "numero_fattura" => "32ddf",
        "importo_totale" => "98765.43",
        "importo_residuo" => "1234.56"
    ],
    [
        "tipo_fattura" => "v",
        "partita_iva_creditore" => "03671960833",
        "partita_iva_debitore" => "IT04507990150",
        "data_fattura" => "2022-01-01",
        "numero_fattura" => "12/2022",
        "importo_totale" => "1000.89",
        "importo_residuo" => "500.12"
    ],
];
