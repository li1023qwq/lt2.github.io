<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_grouptrade.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'grouptrade_fids' => '指定圈子',
	'grouptrade_fids_comment' => '设置允许参与新帖调用的圈子，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'grouptrade_gtids' => '圈子分类',
	'grouptrade_gtids_comment' => '设置圈子所在分类，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'grouptrade_uids' => '用户UID',
	'grouptrade_uids_comment' => '设置要指定显示的用户UID，多个UID请用半角逗号“,”隔开。',
	'grouptrade_startrow' => '起始数据行数',
	'grouptrade_startrow_comment' => '如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'grouptrade_items' => '显示数据条数',
	'grouptrade_items_comment' => '设置一次显示的主题条目数，请设置为大于 0 的整数',
	'grouptrade_titlelength' => '标题最大字节数',
	'grouptrade_titlelength_comment' => '设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'grouptrade_fnamelength' => '标题最大字节数包含版块名称',
	'grouptrade_fnamelength_comment' => '设置标题长度是否将所在版块名称的长度一同计算在内',
	'grouptrade_summarylength' => '主题简短内容文字数',
	'grouptrade_summarylength_comment' => '设置主题简短内容的文字数，0 为使用默认值 255',
	'grouptrade_tids' => '指定主题',
	'grouptrade_tids_comment' => '设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'grouptrade_keyword' => '标题关键字',
	'grouptrade_keyword_comment' => '设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'grouptrade_typeids' => '主题分类',
	'grouptrade_typeids_comment' => '设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_typeids_all' => '全部的主题分类',
	'grouptrade_sortids' => '分类信息',
	'grouptrade_sortids_comment' => '设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_sortids_all' => '全部的分类信息',
	'grouptrade_digest' => '精华主题过滤',
	'grouptrade_digest_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_digest_0' => '普通主题',
	'grouptrade_digest_1' => '精华 I',
	'grouptrade_digest_2' => '精华 II',
	'grouptrade_digest_3' => '精华 III',
	'grouptrade_stick' => '置顶主题过滤',
	'grouptrade_stick_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_stick_0' => '普通主题',
	'grouptrade_stick_1' => '置顶 I',
	'grouptrade_stick_2' => '置顶 II',
	'grouptrade_stick_3' => '置顶 III',
	'grouptrade_special' => '特殊主题过滤',
	'grouptrade_special_comment' => '设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_special_1' => '投票主题',
	'grouptrade_special_2' => '商品主题',
	'grouptrade_special_3' => '悬赏主题',
	'grouptrade_special_4' => '活动主题',
	'grouptrade_special_5' => '辩论主题',
	'grouptrade_special_0' => '普通主题',
	'grouptrade_special_reward' => '悬赏主题过滤',
	'grouptrade_special_reward_comment' => '设置特定类型的悬赏主题',
	'grouptrade_special_reward_0' => '全部',
	'grouptrade_special_reward_1' => '已解决',
	'grouptrade_special_reward_2' => '未解决',
	'grouptrade_recommend' => '推荐主题过滤',
	'grouptrade_recommend_comment' => '设置是否只显示推荐的主题',
	'grouptrade_orderby' => '主题排序方式',
	'grouptrade_orderby_comment' => '设置以哪一字段或方式对主题进行排序',
	'grouptrade_orderby_lastpost' => '按最后回复时间倒序排序',
	'grouptrade_orderby_dateline' => '按发布时间倒序排序',
	'grouptrade_orderby_replies' => '按回复数倒序排序',
	'grouptrade_orderby_views' => '按浏览次数倒序排序',
	'grouptrade_orderby_heats' => '按热度倒序排序',
	'grouptrade_orderby_recommends' => '按主题评价倒序排序',
	'grouptrade_orderby_hourviews' => '按指定时间内浏览次数倒序排序',
	'grouptrade_orderby_todayviews' => '按当天浏览次数倒序排序',
	'grouptrade_orderby_weekviews' => '按本周浏览次数倒序排序',
	'grouptrade_orderby_monthviews' => '按当月浏览次数倒序排序',
	'grouptrade_orderby_hours' => '指定时间(小时)',
	'grouptrade_orderby_hours_comment' => '指定时间内浏览次数倒序排序的时间值',
	'grouptrade_orderby_todayhots' => '按当天累计售出数倒序排序',
	'grouptrade_orderby_weekhots' => '按本周累计售出数倒序排序',
	'grouptrade_orderby_monthhots' => '按当月累计售出数倒序排序',
	'grouptrade_price_add' => ' 附加 ',
	'grouptrade_place' => '活动地点',
	'grouptrade_class' => '活动类型',
	'grouptrade_gender' => '性别要求',
	'grouptrade_gender_0' => '不限',
	'grouptrade_gender_1' => '男',
	'grouptrade_gender_2' => '女',
	'grouptrade_orderby_weekstart' => '按一周内活动开始时间排序',
	'grouptrade_orderby_monthstart' => '按一月内活动开始时间排序',
	'grouptrade_orderby_weekexp' => '按一周内报名截止时间排序',
	'grouptrade_orderby_monthexp' => '按一月内报名截止时间排序',
	'grouptrade_gviewperm' => '圈子浏览权限',
	'grouptrade_gviewperm_nolimit' => '不限制',
	'grouptrade_gviewperm_only_member' => '仅成员',
	'grouptrade_gviewperm_all_member' => '所有人',
	'grouptrade_highlight' => '获得高亮值',
);

?>