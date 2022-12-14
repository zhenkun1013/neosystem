<?php
/**
 * Action基底クラス
 * 
 * @author kanda hirohide
 */
class BaseAction {

	// --- FIELD ---

	var $smarty_;
	var $isAction = true;
	var $const;

	// --- METHOD ---

	/**
	 * コンストラクタ
	 */
	function BaseAction($smarty) {
		$this->smarty_ = $smarty;
		$this->initConst();
	}

	/**
	 * Action実行
	 */
	function execute() {
		echo "This is base action.";
	}

	/**
	 * 致命的エラー発生時ページ表示
	 */
	function showFatalError($error) {
		$this->smarty_->assign("error", $error);
		$this->smarty_->display("fatal_error.html");
		exit;
	}

	/**
	 * 静的変数を初期化します。
	 *
	 * @return void
	 */
	private function initConst() {
		$this->const = array(
			'purposes' => array(
				"I-1" => "I-1.社内利用（正当業務行為）",
				"I-2" => "I-2.社内利用（当社サービス提供（本人の認識あり））",
				"I-3" => "I-3.社内利用（当社サービス提供（I-2を除く）/自社利用促進）",
				"I-4" => "I-4.社内利用（その他（含：他社利用促進））",
				"II-1" => "II-1.第三者提供（業務委託での提供、法令に基づく提供）",
				"II-2" => "II-2.第三者提供（オプトアウト方式、共同利用による提供）",
				"II-3" => "II-3.第三者提供（当社サービス提供（本人の認識あり））",
				"II-4" => "II-4.第三者提供（当社サービス提供（II-3を除く）/自社利用促進）",
				"II-5" => "II-5.第三者提供（その他（含：他社サービス提供、他社利用促進））",
			),
			'mail_domain' => array(
				'@nttdocomo.com',
				'@s1.nttdocomo.com',
				'@s2.nttdocomo.com',
			),
			'fugi_list_csv_headers' => array(
				'No',
				'受付日',
				'申請部署',
				'申請者',
				'案件名称',
				'担当ライン',
				'担当ライン担当者',
				'事務局担当者',
				'会議種別',
				'付議日',
				'総合評価',
				'結果通知日',
				'データ利用／提供目的＋データ項目',
			),
			'fugi_list_csv_syukan_headers' => array(
				'No',
				'受付日',
				'申請部署',
				'申請者',
				'案件名称',
				'会議種別',
				'付議日',
				'総合評価',
				'結果通知日',
				'データ利用／提供目的＋データ項目',
			),
			'meeting_type' => array(
				0 => '簡易会議',
				1 => '本会議',
				2 => '取り下げ',
				3 => '軽微な変更で対応',
				4 => 'その他',
			),
			'sougou_hyouka_list' => array(
				'A' => 'A：リスク小（実施を見合わせる程のリスクはない）',
				'B' => 'B：リスク中（一定のリスクあり／必要性とのバランスで判断要）',
				'C' => 'C：リスク中～大（実施しないことを推奨／極めて慎重に判断要）',
				'D' => 'D：リスク大（実施すべきでない）',
			),
			'souhyou_list' => array(
				0 => '「懸念点」記載のような懸念はあるが、実施を見合わせるほどのリスクはない。',
				1 => '「評価対象・前提」に記載の条件を満たす範囲内である限りは、実施を見合わせるほどのリスクはない。',
			),
			'select_eras' => array(
				'2018',
				'2019',
				'2020',
				'2021',
				'2022',
				'2023',
				'2024',
				'2025',
				'2026',
				'2027',
				'2028',
				'2029',
				'2030',
			),
			'select_years' => array(
				'2018',
				'2019',
				'2020',
				'2021',
				'2022',
				'2023',
				'2024',
				'2025',
				'2026',
				'2027',
				'2028',
				'2029',
				'2030',
			),
			'select_months' => array(
				'01',
				'02',
				'03',
				'04',
				'05',
				'06',
				'07',
				'08',
				'09',
				'10',
				'11',
				'12',
			),
			'select_days' => array(
				'01',
				'02',
				'03',
				'04',
				'05',
				'06',
				'07',
				'08',
				'09',
				'10',
				'11',
				'12',
				'13',
				'14',
				'15',
				'16',
				'17',
				'18',
				'19',
				'20',
				'21',
				'22',
				'23',
				'24',
				'25',
				'26',
				'27',
				'28',
				'29',
				'30',
				'31',
			),
			'toiawase_list_csv_headers' => array(
				'No',
				'受付日',
				'依頼部署',
				'依頼者',
				'案件名称',
				'問合せ種別',
				'事務局担当者',
				'回答日',
			),
		);
	}

}
?>
